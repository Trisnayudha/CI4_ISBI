<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('portal/beranda/index.php');
    }

    public function login()
    {
        return view('login/sign.php');
    }
}
