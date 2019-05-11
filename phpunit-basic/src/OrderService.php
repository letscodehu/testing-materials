<?php

namespace App;

class OrderService {

    private $repository;

    public function __construct(OrderRepository $repository) {
        $this->repository = $repository;
    }
  
    public function placeOrder(CreateOrderRequest $request) {
        // something related to database
    }

}