<?php

use App\Core\Authorize;
use App\Data\DrinksDAO;


Authorize::isLogIn();

$drink = new DrinksDAO();

if (isset($_GET['id'])) {
    // dd($_POST['id']);
    $drink->deleteDrink($_GET['id']);
}

header('Location:/drink_machine_app/products');
exit();
