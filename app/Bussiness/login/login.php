<?php


if (isset($_SESSION['admin'])) {
    header('location: /drink_machine_app/dashboard');
    exit();
} else {

    include 'Views/frontend/login.view.php';
}
