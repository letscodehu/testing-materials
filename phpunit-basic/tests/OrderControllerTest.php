<?php 

class OrderControllerTest extends PHPUnit\Framework\TestCase {

    private $underTest, $mockService;

    public function setUp() {
        $this->mockService = $this->createMock(App\OrderService::class);
        $this->underTest = new App\OrderController($this->mockService);
    }

    /**
    * @test
    */
    public function it_should_return_fail_when_request_is_not_valid() {
        // GIVEN
        $mockRequest = $this->createMock(App\CreateOrderRequest::class);
        $mockRequest->method("isValid")->willReturn(false);
        // WHEN
        $actual = $this->underTest->placeOrder($mockRequest);
        // THEN
        $this->assertEquals($actual, "fail");
    }

    /**
    * @test
    */
    public function it_should_return_success_when_request_is_valid() {
        // GIVEN
        $mockRequest = $this->createMock(App\CreateOrderRequest::class);
        $mockRequest->method("isValid")->willReturn(true);
        // WHEN
        $actual = $this->underTest->placeOrder($mockRequest);
        // THEN
        $this->assertEquals($actual, "success");
    }

    /**
    * @test
    */
    public function it_should_call_service_when_request_is_valid() {
        // GIVEN
        $mockRequest = $this->createMock(App\CreateOrderRequest::class);
        $mockRequest->method("isValid")->willReturn(true);
        $this->mockService->expects($this->once())->method("placeOrder")->with($mockRequest);
        // WHEN
        $actual = $this->underTest->placeOrder($mockRequest);
        // THEN
        
    }

}