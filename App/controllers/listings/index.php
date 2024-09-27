<?php

use Framework\Database;

$config = require base_path('config/db.php');
$db = new Database($config);

loadView('listings/index');