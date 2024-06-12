<?php

use App\Core\Authentication;

$auth = new Authentication();

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $password = $_POST["password"];
    $username = htmlspecialchars($_POST["username"]);

    $authAdmin = $auth->auth($username, $password);

    if (!$authAdmin) {
        $errors = $auth->errors;

        $error = $errors;
        include('./../../../Presentation/backend/login.view.php');
    }
}

header('Location: /drink_machine_app/dashboard');
exit();
