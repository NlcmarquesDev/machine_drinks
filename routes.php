<?php

use App\Core\Router;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];



$router = new Router();

$router->get('/', '/index');

$router->post('/getCoins', '/getcoins');
$router->post('/selectDrink', '/showDrink');
$router->post('/getDrink', '/getDrink');

$router->get('/login', '/login/login');
$router->get('/dashboard', '/backend/home');
$router->post('/dashboard', '/login/auth');
// dd($router);
// $router->get('/orders', '/backend/show');
$router->get('/logout', '/backend/logout');
$router->get('/orders', '/backend/orders');

$router->get('/products', '/backend/products');

$router->get('/product', '/backend/editProduct');
$router->post('/delete', '/backend/deleteProduct');
$router->post('/product', '/backend/addProduct');


$router->post('/restore', '/backend/restore');


$router->router($uri, $method);
