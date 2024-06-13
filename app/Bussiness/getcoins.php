<?php


if (isset($_POST['coin'])) {
    $_SESSION['coins'] += $_POST['coin'];
}

use App\Data\DrinksDAO;

$drinks = (new DrinksDAO)->getAllDrinks();

if (isset($_SESSION['order'])) {

    include('./Views/frontend/selecteddrank.php');
    // include('./Views/backend/home.view.php');
} else {
    include('./Views/frontend/home.php');
}
