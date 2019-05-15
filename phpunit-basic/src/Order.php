<?php

namespace App;

class Order {

    private $id;
    private $username;
    private $address;
    private $email;

    public function __construct($id, $username, $address, $email) {
        $this->email = $email;
        $this->id = $id;
        $this->address = $address;
        $this->username = $username;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getEmail() {
        return $this->email;
    }

}