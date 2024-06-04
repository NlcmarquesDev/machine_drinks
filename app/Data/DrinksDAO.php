<?php

declare(strict_types=1);

namespace App\Data;

use App\Core\Database;

class DrinksDAO
{
    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAll()
    {
        return $this->db->query("SELECT * FROM drinks")->findAll();
    }
    public function getDrinkById(int $id)
    {
        return $this->db->query("SELECT * FROM drinks WHERE id=:id", [':id' => $id])->find();
    }
}
