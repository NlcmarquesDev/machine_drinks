<?php

use App\Data\DrinksDAO;


$drinks = new DrinksDAO();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['stock'])) {
        $drinks->restoreStock(20);
        dd($_POST);
    }
    if (isset($_POST['collect'])) {
        $_SESSION['coins_machine'] = [
            '0.05' => 10,
            '0.10' => 10,
            '0.20' => 10,
            '0.50' => 10,
            '1.00' => 10,
            '2.00' => 10,
        ];
        $_SESSION['totalMonayMachine'] = 38.5;
    }
}

header('location: /drink_machine_app/dashboard');
exit();
