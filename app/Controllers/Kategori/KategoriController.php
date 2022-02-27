<?php

namespace App\Controllers\Kategori;

use App\Controllers\BaseController;
use App\Models\Kategori\KategoriService;

class KategoriController extends BaseController
{
    protected $service;

    public function __construct()
    {
        $this->service = new KategoriService();
    }

    public function index()
    {
        $data = [
            'title' => 'Kategori Berita | ISBI',
            'kategori' => $this->service->getModel(0)
        ];

        return view('Kategori/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Kategori | ISBI',
            'validation' => \Config\Services::validation()
        ];

        return view('Kategori/create', $data);
    }

    public function store()
    {
        if (!$this->validate(
            [
                'nama_kategori' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kategori Harus diisi'
                    ]
                ]
            ]
        )) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('Kategori/create'))->withInput()->with('validation', $validation);
        };

        $this->service->save([
            'nama_kategori' => $this->request->getVar('nama_kategori'),
        ]);
        session()->setFlashdata('pesan', 'Data Kategori Berhasil ditambahkan');
        return redirect()->to(base_url('Kategori'));
    }


    public function edit($id = 0)
    {
        $data = [
            'title' => 'Edit Kategori | ISBI',
            'kategori' => $this->service->getModel($id),
            'validation' => \Config\Services::validation()
        ];

        //Jika data tidak ada
        if (empty($data['kategori'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kategori ' . $id . ' tidak ada');
        }
        return view('Kategori/edit', $data);
    }

    public function update($id)
    {
        $this->service->save([
            'id' => $id,
            'nama_kategori' => $this->request->getVar('nama_kategori'),
        ]);
        session()->setFlashdata('pesan', 'Data Kategori Berhasil diubah');
        return redirect()->to(base_url('Kategori'));
    }

    public function destroy($id)
    {
        $this->service->delete($id);
        session()->setFlashdata('pesan', 'Data Kategori Berhasil dihapus');
        return redirect()->to(base_url('Kategori'));
    }
}
