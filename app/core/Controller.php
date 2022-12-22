<?php

namespace app\core;

use Exception;

class Controller
{
    public function execute(string $router) 
    {
        if(!str_contains($router, '@')) {
            throw new Exception("A rota está registrada com o formato errado");
        }

        list($controller, $method) = explode('@', $router);

        // dd($controller, $method);
        $namespace = "app\controllers\\";
        $controllerNamespace = $namespace.$controller;

        if(!class_exists($controllerNamespace)) {
            throw new Exception("O controller {$controllerNamespace} não existe");
        }

        $controller = new $controllerNamespace;

        if(!method_exists($controller, $method)) {
            throw new Exception("O méthodo {$method} não existe no {$controllerNamespace}");
        }

        $controller->method();
    }
}