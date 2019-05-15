<?php


namespace App;

class OrderRepository {

    private $pdo;

    public function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function createOrder(Order $order) {

    }

    public function findOrder(int $id) {
        
    }

}