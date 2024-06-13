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
            '0.05' => 0,
            '0.10' => 0,
            '0.20' => 0,
            '0.50' => 0,
            '1.00' => 0,
            '2.00' => 0,
        ];
    }
}

header('location: /drink_machine_app/dashboard');
exit();
