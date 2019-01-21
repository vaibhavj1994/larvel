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
 
    public function addDataProvider() {
        return array(
            array(1,2,3),
            array(0,0,0),
            array(-1,-1,-2),
        );
    }
 
    /**
     * @dataProvider addDataProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $result = $this->calculator->add($a, $b);
        $this->assertNotEquals($expected, $result);
    }
 
}
?>