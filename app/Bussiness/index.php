<?php

use App\Data\DrinksDAO;

$drinks = (new DrinksDAO)->getAllDrinks();



include 'Views/frontend/home.php';
