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
}
