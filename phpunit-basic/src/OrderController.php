<?php

namespace App;

class OrderController {

    private $orderService;

    public function __construct(OrderService $orderService) {
        $this->orderService = $orderService;
    }

    public function placeOrder(CreateOrderRequest $request) {
        if ($request->isValid()) {
            $this->orderService->placeOrder($request);
            return "success";   
        }
        return "fail";
    }

}