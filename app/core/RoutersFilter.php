<?php

namespace app\core;

use app\support\Uri;
use app\routes\Routes;
use app\support\RequestType;

class RoutersFilter
{
    private string $uri;
    private string $method;
    private array $routesRegistered;
    
    public function __construct()
    {
        $this->uri = Uri::get();
        $this->method = RequestType::get();
        $this->routesRegistered = Routes::get();
    }

    public function get() {
        return $this->simpleRouter();
    }

    private function simpleRouter()
    {
        if(array_key_exists($this->uri, $this->routesRegistered[$this->method])) {
            return $this->routesRegistered[$this->method][$this->uri];
        }

        return 'NotFoundController@index';
    }

    private function dynamicRouter()
    {

    }
}