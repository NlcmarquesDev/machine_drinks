<?php

use App\Data\DrinksDAO;

if (isset($_POST['coin'])) {
    $_SESSION['coins'] += $_POST['coin'];
    switch ($_POST['coin']) {
        case '0.05':
            $_SESSION['coins_machine']['0.05'] += 1;
            break;
        case '0.10':
            $_SESSION['coins_machine']['0.10'] += 1;
            break;
        case '0.20':
            $_SESSION['coins_machine']['0.20'] += 1;
            break;
        case '0.50':
            $_SESSION['coins_machine']['0.50'] += 1;
            break;
        case '1.00':
            $_SESSION['coins_machine']['1.00'] += 1;
            break;
        case '2.00':
            $_SESSION['coins_machine']['2.00'] += 1;
            break;
    }
}



$drinks = (new DrinksDAO)->getAllDrinks();

if (isset($_SESSION['order'])) {

    include('./Views/frontend/selecteddrank.php');
    // include('./Views/backend/home.view.php');
} else {
    include('./Views/frontend/home.php');
}
