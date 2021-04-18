<?php

use PHPUnit\Framework\TestCase;
require_once "app\Calculator.php";

class CalculatorTest extends Testcase {

    protected $calculator;

    protected function setUp() : void {
        $this->calculator = new Calculator;
    }

    public function testSum() {
        $result = $this->calculator->sum(3, 5);
        $this->assertEquals($result, 8);

    }

    public function testDivision() {
        $result1 = $this->calculator->divide(6,2);
        $result2 = $this->calculator->divide(4,0);
        $this->assertEquals($result1, 3);
        $this->assertEquals($result2, "Can't divide by zero.");
        
    }

    public function testMultiplication() {
        $result = $this->calculator->multiply(5, 9);
        $this->assertEquals($result, 45);
    }

    public function testSubstraction() {
        $result = $this->calculator->substract(5, 3);
        $this->assertEquals($result, 2);
    }

}