<?php

namespace App\Controllers\Berita;

use App\Controllers\BaseController;
use App\Models\Berita\BeritaModel;
use App\Models\Berita\BeritaService;

class BeritaController extends BaseController
{
    protected $model;
    protected $service;
    public function __construct()
    {
        $this->model = new BeritaModel();
        $this->service = new BeritaService();
    }
    public function index()
    {

        $data = [
            'title' => 'Berita | ISBI',
            'berita' => $this->service->getModel(null)
        ];

        return view('Berita/index', $data);
    }

    public function edit($slug = null)
    {
        $data = [
            'title' => 'Edit Berita | ISBI',
            'berita' => $this->service->getModel($slug),
            'validation' => \Config\Services::validation()
        ];

        //Jika data tidak ada
        if (empty($data['berita'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Berita ' . $slug . ' tidak ada');
        }
        return view('Berita/edit', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Berita | ISBI',
            'validation' => \Config\Services::validation()
        ];

        return view('Berita/create', $data);
    }

    public function store()
    {

        if (!$this->validate(
            [
                'title' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Judul Harus diisi'
                    ]
                ],
                'deskripsi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Deskripsi Harus diisi'
                    ]
                ],
                'kategori_id' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kategori Harus diisi'
                    ]
                ],
                'thumbl' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Image Harus diisi'
                    ]
                ],
            ]
        )) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('Berita/create'))->withInput()->with('validation', $validation);
        };

        $slug = url_title($this->request->getVar('title'), '-', true);
        $this->service->save([
            'title' => $this->request->getVar('title'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'slug' => $slug,
            'kategori_id' => $this->request->getVar('kategori_id'),
            'user_id' => '1',
            'thumbl' => $this->request->getVar('thumbl'),
            'status' => $this->request->getVar('status'),
        ]);
        session()->setFlashdata('pesan', 'Data Berita Berhasil ditambahkan');
        return redirect()->to(base_url('Berita'));
    }

    public function update($id)
    {

        $slug = url_title($this->request->getVar('title'), '-', true);
        $this->service->save([
            'id' => $id,
            'title' => $this->request->getVar('title'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'slug' => $slug,
            'kategori_id' => $this->request->getVar('kategori_id'),
            'thumbl' => $this->request->getVar('thumbl'),
            'status' => $this->request->getVar('status'),
        ]);
        session()->setFlashdata('pesan', 'Data Berita Berhasil diubah');
        return redirect()->to(base_url('Berita'));
    }

    public function destroy($id)
    {
        // dd($id);
        $this->service->delete($id);
        session()->setFlashdata('pesan', 'Data Berita Berhasil dihapus');
        return redirect()->to(base_url('Berita'));
    }
}
