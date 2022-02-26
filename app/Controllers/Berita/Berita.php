<?php

namespace App\Controllers\Berita;

use App\Controllers\BaseController;

class Berita extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Berita | ISBI'
        ];

        return view('Berita/index', $data);
    }

    public function edit($id = 0)
    {
        echo "Ini id $id";
    }
}
