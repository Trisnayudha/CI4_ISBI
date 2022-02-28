<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function index()
    {
        return view('login/sign');
    }

    public function login()
    {
        // dd("test");
        return redirect()->to(base_url('Dashboard'));;
    }
}
