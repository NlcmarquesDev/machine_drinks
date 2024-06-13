<?php

declare(strict_types=1);

session_start();
const BASE_PATH = __DIR__;
$_SESSION['coins'] = isset($_SESSION['coins']) ? $_SESSION['coins'] : 0;
$_SESSION['totalMonayMachine'] = isset($_SESSION['totalMonayMachine']) ? $_SESSION['totalMonayMachine'] : 0;
$_SESSION['coins_machine'] = [
    '0.05' => isset($_SESSION['coins_machine']['0.05']) ? $_SESSION['coins_machine']['0.05'] : 0,
    '0.10' => isset($_SESSION['coins_machine']['0.10']) ? $_SESSION['coins_machine']['0.10'] : 0,
    '0.20' => isset($_SESSION['coins_machine']['0.20']) ? $_SESSION['coins_machine']['0.20'] : 0,
    '0.50' => isset($_SESSION['coins_machine']['0.50']) ? $_SESSION['coins_machine']['0.50'] : 0,
    '1.00' => isset($_SESSION['coins_machine']['1.00']) ? $_SESSION['coins_machine']['1.00'] : 0,
    '2.00' => isset($_SESSION['coins_machine']['2.00']) ? $_SESSION['coins_machine']['2.00'] : 0,
];


require_once 'vendor/autoload.php';
require_once 'app/Core/functions.php';
require_once 'routes.php';
