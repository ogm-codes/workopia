<?php

//$router->get('/', 'HomeController@index');
//$router->get('/lsiting', 'ListinControllerg@index');

$router->get('/', 'controllers/home.php');
$router->get('/listings', 'controllers/listings/index.php');
$router->get('/listings/create', 'controllers/listings/create.php');
$router->get('/listings', 'controllers/listings/show.php');

// Router Post

$router->get('/auth/register','UserController@create');
$router->get('auth/login' , 'UserController@create');

$router->post('/auth/register', 'UserController@store');