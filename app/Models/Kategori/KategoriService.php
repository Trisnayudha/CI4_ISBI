<?php

namespace App\Models\Kategori;

use App\Models\Kategori\KategoriModel;

class KategoriService extends KategoriModel
{
    public function getModel($id)
    {
        if ($id == 0) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
