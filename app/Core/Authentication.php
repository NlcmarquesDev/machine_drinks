<?php

declare(strict_types=1);

namespace App\Core;

use App\Data\AdminDAO;

class Authentication
{
    public static $errors = '';
    public static function validate($username, $password)
    {
        $validationUser = Validation::validateString($username);
        $validationPass = Validation::validateString($password);
        //posso fazer uma verificacao de cada entrada escrita
        if (!$validationPass || !$validationUser) {
            self::$errors = "Please insert all the fields!";
            return false;
        }
        return true;
    }

    public static function auth($username, $password)
    {
        $form = self::validate($username, $password);
        if (!$form) {
            return false;
        }

        $admin = new AdminDAO();
        $adminData = $admin->getAdminData();

        $auth = Validation::validateUser($username, $password, $adminData);

        if (!$auth) {
            self::$errors = "Login incorrect, please try again!";
            return false;
        }
        self::createSessionAdmin($username);
        return true;
    }
    public static function createSessionAdmin($name)
    {
        $_SESSION['admin'] = $name;
    }
}
