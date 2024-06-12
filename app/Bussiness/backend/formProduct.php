<?php

use App\Core\Authorize;
use App\Data\DrinksDAO;

Authorize::isLogIn();


if (isset($_GET['id'])) {
    $isEditing = true;

    $drinks = new DrinksDAO();
    $drink = $drinks->getDrinkById($_GET['id']);

    $product = [
        'id' => $drink['id'],
        'name' => $drink['name'],
        'size' => $drink['size'],
        'price' => $drink['price'],
        'stock' => $drink['stock'],
    ];
}




include(BASE_PATH . '/Views/backend/formProduct.view.php');
