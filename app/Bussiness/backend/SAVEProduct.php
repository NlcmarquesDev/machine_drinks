<?php

use App\Core\Authorize;
use App\Data\DrinksDAO;
use App\Core\Validation;

Authorize::isLogIn();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idDrink = (int)htmlspecialchars($_POST['id']);
    $nameDrink = htmlspecialchars($_POST['name']);
    $sizeDrink = htmlspecialchars($_POST['size']);
    $priceDrink = htmlspecialchars($_POST['price']);
    $stockDrink = htmlspecialchars($_POST['stock']);

    $drinks = new DrinksDAO();

    $validation = Validation::validateFields([$nameDrink, $sizeDrink, $priceDrink, $stockDrink]);

    if (!$validation) {

        $_SESSION['errors'] = "Please insert all the fields!";
        header("Location: /drink_machine_app/addProduct");
        exit();
    }


    if ($idDrink === 0) {
        $drinks->insertNewDrink($nameDrink, $sizeDrink, $priceDrink, $stockDrink);
        $msg = 'Drink created successfully';
    } else {
        $drinks->updateDrinkbyId($idDrink, $nameDrink, $sizeDrink, $priceDrink, $stockDrink);
        $msg = 'Drink updated successfully';
    }

    $_SESSION['alert'] = $msg;

    header('location: /drink_machine_app/products');
    exit();
}
