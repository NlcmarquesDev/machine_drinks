<?php

use App\Core\Authorize;
use App\Data\DrinksDAO;

Authorize::isLogIn();

$product = new DrinksDAO();

$products = $product->getAllDrinks();


include(BASE_PATH . '/Views/backend/products.view.php');
