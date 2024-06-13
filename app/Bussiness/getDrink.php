<?php

use App\Data\DrinksDAO;
use App\Data\OrdersDAO;

$drinks = new DrinksDAO();

$stock = $drinks->getStockById($_SESSION['order']['id']);
$retriveChangeMoney = 0;
$errors = [];
if ($stock > 0) {
    $newStock = $stock['stock'] - 1;
    $drinks->updateStockById($_SESSION['order']['id'], $newStock);
    $retriveChangeMoney = $_SESSION['coins'] - $_SESSION['order']['price'];

    $retriveCoins = round($retriveChangeMoney * 100);

    while ($retriveCoins != 0) {
        if ($retriveCoins >= 200 && $_SESSION['coins_machine']['2.00'] > 0) {

            $_SESSION['coins_machine']['2.00'] -= 1;
            $retriveCoins -= 200;
        } else if ($retriveCoins >= 100 && $_SESSION['coins_machine']['1.00'] > 0) {
            $_SESSION['coins_machine']['1.00'] -= 1;
            $retriveCoins -= 100;
        } else if ($retriveCoins >= 50 && $_SESSION['coins_machine']['0.50'] > 0) {
            $_SESSION['coins_machine']['0.50'] -= 1;
            $retriveCoins -= 0.50;
        } else if ($retriveCoins >= 20 && $_SESSION['coins_machine']['0.20'] > 0) {
            $_SESSION['coins_machine']['0.20'] -= 1;
            $retriveCoins -= 20;
        } else if ($retriveCoins >= 10 && $_SESSION['coins_machine']['0.10'] > 0) {
            $_SESSION['coins_machine']['0.10'] -= 1;
            $retriveCoins -= 10;
        } else if ($retriveCoins >= 5 && $_SESSION['coins_machine']['0.05'] > 0) {
            $_SESSION['coins_machine']['0.05'] -= 1;
            $retriveCoins -= 5;
        } else {
            $errors['error'] = 'We do not have change to return, please cancel and enter the correct amount.';
        }
    }

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
