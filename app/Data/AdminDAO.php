<?php

namespace App\Data;

use App\Core\Database;

class AdminDAO
{
    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function createAdmin($username, $password)
    {
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        $this->db->query("INSERT INTO administrator (username, pass) VALUES (:username, :pass)", [
            ':username' => $username,
            ':pass' => $hashPassword
        ]);
    }
    public function getAdminData()
    {
        return $this->db->query("SELECT * FROM administrator")->find();
    }
}
