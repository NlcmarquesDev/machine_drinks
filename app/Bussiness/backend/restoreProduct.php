<?php

use App\Data\DrinksDAO;


$drinks = new DrinksDAO();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $drinks->restoreStock(20);
}

header('location: /drink_machine_app/dashboard');
exit();
