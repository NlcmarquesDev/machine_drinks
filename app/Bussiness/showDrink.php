<?php


use App\Data\DrinksDAO;

if (isset($_POST["btnradio"])) {

    $drink = (new DrinksDAO())->getDrinkById($_POST["btnradio"]);
    $_SESSION['order'] = $drink;
}



include 'Views/frontend/selecteddrank.php';
