<?php

use App\Core\Authorize;
use App\Data\OrdersDAO;

Authorize::isLogIn();

$orders = new OrdersDAO();

$orders = $orders->getAllOrders();


include('./Views/backend/orders.view.php');
