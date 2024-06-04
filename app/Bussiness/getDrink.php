<?php

use App\Data\DrinksDAO;

$drinks = new DrinksDAO();

//verificar se tem dinheiro suficeinte para comprar a bebida senao volta para tras ecom mensagem a pedir dinheir
// dd($_SESSION['order']);
// if ($_SESSION['order']['price'] > $_SESSION['coins']) {

//     include 'Views/frontend/selecteddrank.php';
// }
//se tem dinheiro verificar

//verificar o stock da bebida se nao tiver stock, retorna aviso para escolher nova bebida

$stock = $drinks->getStockById($_SESSION['order']['id']);
$retriveChangeMoney = 0;
if ($stock > 0) {
    $newStock = $stock['stock'] - 1;
    $drinks->updateStockById($_SESSION['order']['id'], $newStock);
    $retriveChangeMoney = $_SESSION['coins'] - $_SESSION['order']['price'];
    unset($_SESSION['coins']);
    unset($_SESSION['order']);
}


include 'Views/frontend/message.php';

// se tiver stock pode recolher a bebida e verificar se vai receber troco, se sim efectua o calculo e devolve o troco ao cliente
// se tiver stock nao esquecer de retira a quantidade do stock existente

//reinicia a aplicaao
