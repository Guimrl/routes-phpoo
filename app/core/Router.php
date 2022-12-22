<?php

namespace app\core;

use app\core\RoutersFilter;

class Router
{
    public static function run()
    {
        $routerRegistered = new RoutersFilter;
        $router = $routerRegistered->get();

        dd($router);
    }
}