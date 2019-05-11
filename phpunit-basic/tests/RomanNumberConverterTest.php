<?php

class RomanNumberConverterTest extends PHPUnit\Framework\TestCase {

    private $underTest;

    public function setUp() {
        $this->underTest = new App\RomanNumberConverter();
    }

    /**
    * @test
    */
    public function it_shuld_return_I_for_1() {
        $actual = $this->underTest->convert(1);
        $this->assertEquals($actual, "I");
    }

    /**
    * @test
    */
    public function it_should_return_II_for_2() {
        // GIVEN
        // WHEN
        $actual = $this->underTest->convert(2);    
        // THEN
        $this->assertEquals($actual, "II");
    }

    /**
    * @test
    */
    public function it_should_return_III_for_3() {
        $actual = $this->underTest->convert(3);
        $this->assertEquals($actual, "III");
    }

    /**
    * @test
    */
    public function it_should_return_IV_for_4() {
        $actual = $this->underTest->convert(4);
        $this->assertEquals($actual, "IV");
    }

    /**
    * @test
    */
    public function it_should_return_V_for_5() {
        $actual = $this->underTest->convert(5);
        $this->assertEquals($actual, "V");
    }

    /**
    * @test
    */
    public function it_should_return_VI_for_6() {
        $actual = $this->underTest->convert(6);
        $this->assertEquals($actual, "VI");
    }

    /**
    * @test
    */
    public function it_should_return_VIII_for_8() {
        $actual = $this->underTest->convert(8);
        $this->assertEquals($actual, "VIII");
    }

    /**
    * @test
    */
    public function it_should_return_IX_for_9() {
        $actual = $this->underTest->convert(9);
        $this->assertEquals($actual, "IX");
    }

    /**
    * @test
    */
    public function it_should_return_X_for_10() {
        $actual = $this->underTest->convert(10);
        $this->assertEquals($actual, "X");
    }

    /**
    * @test
    */
    public function it_should_return_XXXI_for_31() {
        $actual = $this->underTest->convert(31);
        $this->assertEquals($actual, "XXXI");
    }

    /**
    * @test
    */
    public function it_should_return_L_for_50() {
        $actual = $this->underTest->convert(50);
        $this->assertEquals($actual, "L");
    }

    /**
    * @test
    */
    public function it_should_return_XL_for_40() {
        $actual = $this->underTest->convert(40);
        $this->assertEquals($actual, "XL");
    }

    /**
    * @test
    */
    public function it_should_return_XC_for_90() {
        $actual = $this->underTest->convert(90);
        $this->assertEquals($actual, "XC");
    }

    /**
    * @test
    */
    public function it_should_return_C_for_100() {
        $actual = $this->underTest->convert(100);
        $this->assertEquals($actual, "C");
    }

    /**
    * @test
    */
    public function it_should_return_CD_for_400() {
        $actual = $this->underTest->convert(400);
        $this->assertEquals($actual, "CD");
    }

    /**
    * @test
    */
    public function it_should_return_D_for_500() {
        $actual = $this->underTest->convert(500);
        $this->assertEquals($actual, "D");
    }

    /**
    * @test
    */
    public function it_should_return_M_for_1000() {
        $actual = $this->underTest->convert(1000);
        $this->assertEquals($actual, "M");
    }

    /**
    * @test
    */
    public function it_should_return_MCMLXXXVI_for_1986() {
        $actual = $this->underTest->convert(1986);
        $this->assertEquals($actual, "MCMLXXXVI");
    }  

    /**
    * @test
    * @expectedException InvalidArgumentException
    */
    public function it_should_throw_exception_on_negatives() {
        $this->underTest->convert(-1);
    }

    /**
    * @test
    * @expectedException InvalidArgumentException
    */
    public function it_should_throw_exception_on_strings() {
        $this->underTest->convert("test");
    }

    /**
    * @test
    * @expectedException InvalidArgumentException
    */
    public function it_should_throw_exception_on_arrays() {
        $this->underTest->convert([]);
    }

    /**
    * @test
    * @expectedException InvalidArgumentException
    */
    public function it_should_throw_exception_on_objects() {
        $this->underTest->convert(new stdClass());
    }


}