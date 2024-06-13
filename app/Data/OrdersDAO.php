<?php

namespace App\Data;

use App\Core\Database;

class OrdersDAO
{
    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getAllOrders()
    {
        return $this->db->query("SELECT o.id as order_id, o.total_given as total, o.change_return,o.stock_at_moment ,d.name as drink_name, d.size,d.price FROM Orders o JOIN drinks d ON o.drink_id = d.id")->findAll();
    }

    public function addOrder($orderData)
    {
        $this->db->query("INSERT INTO Orders (drink_id, total_given,change_return,stock_at_moment) VALUES (:drink_id, :total_given,:change_return, :stock_at_moment)", [
            ':drink_id' => $orderData['drink_id'],
            ':total_given' => $orderData['total'],
            ':change_return' => $orderData['change'],
            ':stock_at_moment' => $orderData['stock']
        ]);
    }
    public function countOrders()
    {
        return $this->db->query("SELECT COUNT(*) as total FROM orders")->find();
    }
}
