<?php

require '../helpers.php';
require base_path('Router.php');
require base_path('Database.php');

$config = require base_path('config/db.php');

$db = new Database($config);

$router = new Router();
$routes = require base_path('routes.php');

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);