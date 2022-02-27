<?php

namespace App\Controllers\Kategori;

use App\Controllers\BaseController;

class Kategori extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Kategori Berita | ISBI'
        ];

        return view('Kategori/index', $data);
    }
}
