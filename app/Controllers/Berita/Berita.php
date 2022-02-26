<?php

namespace App\Controllers\Berita;

use App\Controllers\BaseController;
use App\Models\Berita\BeritaModel;

class Berita extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new BeritaModel();
    }
    public function index()
    {
        $berita = $this->model->findAll();
        $data = [
            'title' => 'Berita | ISBI',
            'berita' => $berita
        ];

        return view('Berita/index', $data);
    }

    public function edit($id = 0)
    {
        $data = [
            'title' => 'Tambah Berita | ISBI'
        ];
        return view('Berita/edit', $data);
    }
}
