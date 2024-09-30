<?php

//$router->get('/', 'HomeController@index');
//$router->get('/lsiting', 'ListinControllerg@index');

$router->get('/', 'controllers/home.php');
$router->get('/listings', 'controllers/listings/index.php');
$router->get('/listings/create', 'controllers/listings/create.php');
$router->get('/listings', 'controllers/listings/show.php');

// Router Post