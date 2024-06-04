<?php

use App\Data\DrinksDAO;

$drinks = (new DrinksDAO)->getAll();



include 'Views/frontend/home.php';
