<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;
use App\Models\Users\UserService;

class UserController extends BaseController
{
    protected $service;
    public function __construct()
    {
        $this->service = new UserService();
    }

    public function index()
    {
        $data = [
            'title' => 'Users | ISBI',
            'user' => $this->service->getModel(0)
        ];

        return view('User/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'User Create | ISBI',
            'validation' => \Config\Services::validation()
        ];
        return view('User/create', $data);
    }

    public function store()
    {
        if (!$this->validate(
            [
                'name' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Harus diisi'
                    ]
                ],
                'email' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Email Harus diisi'
                    ]
                ],
                'phone' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nomor handphone harus diisi',
                    ]
                ],
                'password' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Password harus diisi',
                    ]
                ]

            ]
        )) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('Users/create'))->withInput()->with('validation', $validation);
        };

        $this->service->save([
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'phone' => $this->request->getVar('phone'),
            'role' => $this->request->getVar('role'),
        ]);
        session()->setFlashdata('pesan', 'Data Pengguna Berhasil ditambahkan');
        return redirect()->to(base_url('Users'));
    }

    public function edit($id)
    {
        $data = [
            'title' => 'User Edit | ISBI',
            'users' => $this->service->getModel($id),
            'validation' => \Config\Services::validation()
        ];
        //Jika data tidak ada
        if (empty($data['users'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Users ' . $id . ' tidak ada');
        }
        return view('User/edit', $data);
    }

    public function update($id)
    {

        $this->service->save([
            'id' => $id,
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'role' => $this->request->getVar('role'),
        ]);
        session()->setFlashdata('pesan', 'Data Kategori Berhasil diubah');
        return redirect()->to(base_url('Kategori'));
    }

    public function destroy($id)
    {
        $this->service->delete($id);
        session()->setFlashdata('pesan', 'Data Kategori Berhasil dihapus');
        return redirect()->to(base_url('Users'));
    }
}
