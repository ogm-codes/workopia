<?php

require '../helpers.php';
//loadView('home');

//Setup for Routing
$uri = $_SERVER['REQUEST_URI'];

//inspectAndDie($uri);
require base_path('router.php');



