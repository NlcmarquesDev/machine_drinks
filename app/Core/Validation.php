<?php

namespace App\Core;

class Validation
{

    public static function validateString($string)
    {
        $trimmed = trim($string);

        if (strlen($trimmed) !== 0) {
            return true;
        }
        return false;
    }

    public static function validateUser($username, $password, $adminData)
    {
        if ($adminData['username'] == $username &&  password_verify($password, $adminData['pass'])) {
            return true;
        }
        return false;
    }

    public static function validateFields($fieds)
    {
        for ($i = 0; $i < count($fieds); $i++) {

            $result = self::validateString($fieds[$i]);
            if (!$result)
                return false;
        }
        return true;
    }
}
