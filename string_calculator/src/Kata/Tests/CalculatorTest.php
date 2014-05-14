<?php

namespace Kata\Tests;
use Kata\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase {

    public $calculator;

    public function setUp() {
        $this->calculator = new Calculator();
    }
    public function testsimple()
    {

        $this->assertEquals(0, $this->calculator->add('') );
    }

    public function test_one_number() {
        $this->assertEquals(1, $this->calculator->add('1'));
    }

    public function test_suma()
    {
        $this->assertEquals(3, $this->calculator->add("1,2"));
    }

    public function test_n_numbers() {
        $this->assertEquals(10, $this->calculator->add('1,2,3,4'));
    }

    public function test_different_inputs() {
        $this->assertEquals(6, $this->calculator->add('1\n2,3'));
    }

    /**
     * @expectedException Exception
     */
    public function testPete(){
        $this->calculator->add('1,\n');
//        $this->setExpectedException('Kata\InvalidArgumentException');
    }

    public function test_more_difficult() {
        $this->assertEquals(10, $this->calculator->add('//;\n1;2;3\n4'));
    }

    /**
     * @expectedException Exception
     */
    public function test_more_difficult_exception() {
        $this->calculator->add('//;\n1,2;3\n4');
    }
}
 