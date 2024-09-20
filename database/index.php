<?php
require_once 'autoload.php';
$request = $_SERVER['REQUEST_URI'];
$array = explode("/", $request);
$routes = array_slice($array, 1, count($array));
$controller = $routes[0] ?? null;
$method = $routes[1] ?? null;
$parameter = $routes[2] ?? null;

if (!is_null($controller)) {
    if (!is_null($method)) {
        $foundController = "{$controller}Controller";
        if (class_exists($foundController)) {
            $class = new $foundController();
            return $class->$method();
        } else {
            echo "Page not found: " . $controller;
        }
    } else {
        # code...
    }
} else {
    # code...
}
