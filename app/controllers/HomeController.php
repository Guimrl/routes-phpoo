<?php

namespace app\controllers;

use app\database\Filters;
use app\database\models\User;

class HomeController extends Controller
{
    public function index()
    {

        $filters = new Filters;
        $filters->where('id', '>', 50, 'and');
        $filters->where('firstName', 'like',[]);
        $filters->limit(5);
        
        
        $user = new User;
        $user->setFilters($filters);
        $user->fetchAll();
        

        $this->view('home', ['title' => 'Home']);
    }
}
