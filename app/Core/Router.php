<?php

declare(strict_types=1);

namespace App\Core;

class Router
{
    public $routes = [];

    public function router($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                include(BASE_PATH . '/app/Bussiness' . $route['controller'] . '.php');
            }
        }
    }

    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => '/drink_machine_app' . $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null
        ];
        return $this;
    }
    public function get($uri, $controller)
    {
        return $this->add('GET', $uri, $controller);
    }
    public function post($uri, $controller)
    {
        return $this->add('POST', $uri, $controller);
    }
}
