<?php
require 'Calculator.php';
use PHPUnit\Framework\TestCase;
 
class CalculatorTests extends TestCase
{
    private $calculator;
 
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown()
    {
        $this->calculator = NULL;
    }
 
    public function testAdd()
    {
        $result = $this->calculator->add(2, 2);
        $this->assertNotEquals(3, $result);
    }
}