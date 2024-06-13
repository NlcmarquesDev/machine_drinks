<?php

use App\Core\Authorize;
use App\Data\DrinksDAO;
use App\Data\OrdersDAO;

Authorize::isLogIn();

$drinks = new DrinksDAO();
$orders = new OrdersDAO();

$totalDrinksMachine = $drinks->totalNumberDrinks();
$totalOrders = $orders->countOrders();
$totalStockDrinks = $drinks->totalItemsStock();
$resumeCardDrinks = $drinks->getDrinkAndStock();

// dd($resumeCardDrinks);

// dd($totalDrinksMachine);

include('./Views/backend/home.view.php');
