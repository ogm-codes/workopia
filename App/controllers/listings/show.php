<?php

use Framework\Database;

$config = require base_path('config/db.php');
$db = new Database($config);

$id = $_GET['id'] ?? '';