<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = require 'routes.php';

function routeToController (string $uri, array $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {
    die($code);
}

routeToController($uri, $routes);