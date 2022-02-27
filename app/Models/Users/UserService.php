<?php


namespace App\Models\Users;

use App\Models\Users\UserModel;

class UserService extends UserModel
{
    public function getModel($id)
    {
        if ($id == 0) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
