<?php 

namespace App;

class CreateOrderRequest {

    private $productList, $buyer, $seller;

    public function __construct($productList, $buyer, $seller) {
        $this->productList = $productList;
        $this->buyer = $buyer;
        $this->seller = $seller;
    }

    public function isValid() {
        return !is_null($this->buyer) && !is_null($this->seller) && is_array($this->productList);
    }

}