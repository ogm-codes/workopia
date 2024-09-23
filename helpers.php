<?php

/**
 * params
 * 
 * @param string $path
 * @return string
 */
function base_path($path = '') {
    return __DIR__ . '/' . $path;
}

/**
 * Load a view
 * 
 * @param string $name
 * @return void
 */
function loadView($name) {
    require base_path("views/{$name}.view.php");
}