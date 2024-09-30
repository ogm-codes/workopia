<?php

require __DIR__ . '/../vendor/autoload.php';


use Framework\Router;
use Framework\Session;

Session::start();

require '../helpers.php';

$config = require base_path('config/db.php');

$db = new  Framework\Database($config);

$router = new Router();
$routes = require base_path('routes.php');

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);