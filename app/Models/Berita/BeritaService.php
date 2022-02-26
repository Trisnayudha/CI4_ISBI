<?php

namespace App\Models\Berita;

class BeritaService extends BeritaModel
{
    public function getModel($slug)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
