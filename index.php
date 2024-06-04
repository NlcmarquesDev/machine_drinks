<?php

declare(strict_types=1);

session_start();
const BASE_PATH = __DIR__;
$_SESSION['coins'] = $_SESSION['coins'] ? $_SESSION['coins'] : 0;


require_once 'vendor/autoload.php';
require_once 'app/Core/functions.php';
require_once 'routes.php';
