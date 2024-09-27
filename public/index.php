<?php

require '../helpers.php';
//require base_path('Framework/Router.php');
//require base_path('Framework/Database.php');

spl_autoload_register(function ($class) {
    $path = base_path('Framework/' . $class . '.php');
    if (file_exists($path)) {
        require $path;
    }
});

$config = require base_path('config/db.php');

$db = new Database($config);

$router = new Router();
$routes = require base_path('routes.php');

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);