<?php

use App\Data\OrdersDAO;

$orders = new OrdersDAO();

$orders = $orders->getAllOrders();


include('./Views/backend/home.view.php');
