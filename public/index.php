<?php

require '../helpers.php';
require base_path('Database.php');
$config = require base_path('config/db.php');

$db = new Database($config);
//loadView('home');

//Setup for Routing
$uri = $_SERVER['REQUEST_URI'];

//inspectAndDie($uri);
require base_path('router.php');



