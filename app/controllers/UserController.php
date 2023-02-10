<?php

namespace app\controllers;

use app\core\Request;
use app\controllers\Controller;

class UserController extends Controller
{
    // public function index()
    // {
    //     dd("index UserController");
    // }

    public function edit($params)
    {
        $this->view(
            'user',
            [
                'name' => 'Guilherme',
                'title' => 'página user'   
            ]
        );
    }

    public function update($params)
    {
        $response = Request::only(['firstName', 'lastName']);
        dd($response);
        // dd(Resquest::input('firstName'));
    }
}
