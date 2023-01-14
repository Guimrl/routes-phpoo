<?php

namespace app\controllers;

use League\Plates\Engine;
use app\controllers\Controller;

class UserController extends Controller
{
    public function edit($params)
    {

        $this->view (
            'user',
            [
                'name' => 'Guilherme', 
                'title' => 'Página do user'
                
            ]
        );
    }
}
