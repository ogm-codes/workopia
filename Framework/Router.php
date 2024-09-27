<?php

namespace Framework;
class Router {
    protected $routes = [];

    public function registerRoute($method, $uri, $controller) {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller
        ];

    }

    /**
     * GET Route
     * 
     * @param string $uri
     * @param mixed $controller
     * @return void
     */
    public function get($uri, $controller) {
        $this->registerRoute('GET', $uri, $controller);    
    }
    
    /**
     * POST Route
     * 
     * @param string $uri
     * @param mixed $controller
     * @return void
     */
    public function post($uri, $controller) {
        $this->registerRoute('POST', $uri, $controller);
    }

     /**
     * PUT Route
     * 
     * @param string $uri
     * @param mixed $controller
     * @return void
     */
    public function put($uri, $controller) {
        $this->registerRoute('PUT', $uri, $controller);
    }

    /**
     * PATCH Route
     * 
     * @param string $uri
     * @param mixed $controller
     * @return void
     */
    public function patch($uri, $controller) {
        $this->registerRoute('PATCH', $uri, $controller);
    }

    /**
     * DELETE Route
     * 
     * @param string $uri
     * @param mixed $controller
     * @return void
     */
   /* public function delete($uri, $controller) {
        $this->registerRoute('DELETE', $uri, $controller);
    } */

    /**
     * Load error page
     * 
     * @param int $httpCode
     * @return void
     */
    public function error($httpCode = 404){
        http_response_code($httpCode);
        loadView('error/404');
        exit;
    }

     /**
     * Route the request
     * 
     * @param string $uri
     * @param mixed $controller
     * @return void
     */
    public function route($uri, $method) {
        foreach($this->routes as $route){
            if($route['uri'] === $uri && $route['method'] === $method) {
                require base_path('App/' . $route['controller']);
                return;
            }
        }
        $this->error();
    }
}