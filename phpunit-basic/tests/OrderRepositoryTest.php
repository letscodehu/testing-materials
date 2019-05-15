<?php

class OrderRepositoryTest extends PHPUnit\Framework\TestCase {

    private $pdo, $underTest;

    public function __construct() {
        parent::__construct();
        $this->pdo = new PDO("sqlite::memory:");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function setUp() {
        $this->pdo->exec("CREATE TABLE orders (id int(11), username VARCHAR(60), email VARCHAR(255), address VARCHAR(255), PRIMARY KEY(id))");
        $this->underTest = new App\OrderRepository($this->pdo);
    }

    public function tearDown() {
        $this->pdo->exec("DROP TABLE orders");
    }

    public function test() {
        $this->assertTrue(true);
    }

}