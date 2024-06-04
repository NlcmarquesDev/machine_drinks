<?php

use App\Core\Router;


// $uri = $_SERVER['REQUEST_URI'];
// $method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];



$router = new Router();

$router->get('/', '/index');
$router->post('/getCoins', '/getcoins');
$router->post('/selectDrink', '/showDrink');
$router->post('/getDrink', '/getDrink');

// dd($router);

$router->router($uri, $method);
