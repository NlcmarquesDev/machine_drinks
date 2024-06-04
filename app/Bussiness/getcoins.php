<?php


if (isset($_POST['coin'])) {
    $_SESSION['coins'] += $_POST['coin'];
}

use App\Data\DrinksDAO;

$drinks = (new DrinksDAO)->getAll();

if (isset($_SESSION['order'])) {

    include 'Views/frontend/selecteddrank.php';
} else {
    include 'Views/frontend/home.php';
}
