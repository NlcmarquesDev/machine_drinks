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

    public function getAllDrinks()
    {
        return $this->db->query("SELECT * FROM drinks")->findAll();
    }
    public function getDrinkById(int $id)
    {
        return $this->db->query("SELECT * FROM drinks WHERE id=:id", [':id' => $id])->find();
    }
    public function getStockById(int $id)
    {
        return $this->db->query("SELECT stock FROM drinks WHERE id=:id", [':id' => $id])->find();
    }
    public function updateDrinkbyId($id, $name, $size, $price, $stock)
    {
        $this->db->query("UPDATE drinks SET name=:name, size=:size, price=:price, stock=:stock WHERE id=:id", [':id' => $id, ':name' => $name, ':size' => $size, 'price' => $price, ':stock' => $stock]);
    }

    public function updateStockById(int $id, int $quantity)
    {
        $this->db->query('UPDATE drinks SET stock = :quantity WHERE id=:id', [':id' => $id, ':quantity' => $quantity]);
    }
    public function insertNewDrink($name, $size, $price, $stock)
    {
        $this->db->query("INSERT INTO drinks (name, size, price, stock) VALUES (:name, :size, :price, :stock)", [
            ':name' => $name,
            ':size' => $size,
            ':price' => $price,
            ':stock' => $stock,
        ]);
    }

    public function deleteDrink(int $id)
    {
        $this->db->query("DELETE FROM drinks WHERE id=:id", [':id' => $id]);
    }
}
