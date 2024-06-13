<?php

declare(strict_types=1);

namespace App\Core;

class Authorize
{

    public static function isLogIn()
    {

        if (!isset($_SESSION['admin']) && $_SESSION['admin'] != 'admin') {
            header('location: /drink_machine_app/');
            exit();
        }
    }
}
