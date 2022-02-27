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
            'title' => 'User Create | ISBI'
        ];
        return view('User/create', $data);
    }

    public function store()
    {
        //
    }

    public function edit()
    {
        $data = [
            'title' => 'User Edit | ISBI'
        ];
        return view('User/edit', $data);
    }

    public function update()
    {
        $data = [
            'title' => 'User Edit | ISBI'
        ];
        return view('User/edit', $data);
    }

    public function destroy()
    {
        //
    }
}
