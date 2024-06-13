<?php

use App\Data\DrinksDAO;
use App\Data\OrdersDAO;

$drinks = new DrinksDAO();

$stock = $drinks->getStockById($_SESSION['order']['id']);
$retriveChangeMoney = 0;
if ($stock > 0) {
    $newStock = $stock['stock'] - 1;
    $drinks->updateStockById($_SESSION['order']['id'], $newStock);
    $retriveChangeMoney = $_SESSION['coins'] - $_SESSION['order']['price'];
    $_SESSION['totalMonayMachine'] += $_SESSION['order']['price'];

    $dataOrder = [
        'drink_id' => $_SESSION['order']['id'],
        'total' => $_SESSION['coins'],
        'change' => $retriveChangeMoney,
        'stock' => $newStock,
    ];
    $order = new OrdersDAO();
    $order->addOrder($dataOrder);



    unset($_SESSION['coins']);
    unset($_SESSION['order']);
}


include 'Views/frontend/message.php';
