<?php

namespace app\controllers;

use app\database\models\User;

class HomeController extends Controller
{
    public function index()
    {

        $user = new User;
        $user->fetch();
        
        $this->view('home', ['title' => 'Home']);
    }
}
