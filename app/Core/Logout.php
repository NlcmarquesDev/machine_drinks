<?php

declare(strict_types=1);

namespace App\Core;

class Logout
{

    public static function sessionDestory()
    {
        $_SESSION = [];
        session_destroy();
        $paramsCookie = session_get_cookie_params();

        setcookie('PHPSESSID', '', time() - 3600, $paramsCookie['path'], $paramsCookie['domain']);
    }

    public static function redirect()
    {
        header('location:/drink_machine_app/');
        exit();
    }
}
