<?php

class Router {
    protected $routes = [];

    /**
     * Add n new route
     * 
     * @param string $method
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function registerRoute($method, $uri, $controller){
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller
        ];
    }
}

$routes = require base_path('routes.php');

if (array_key_exists($uri, $routes)) {
    require(base_path($routes[$uri]));
} else {
    require(base_path('404'));
}