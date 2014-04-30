<?php
/**
 * Created by PhpStorm.
 * User: carlos.sanchez
 * Date: 30/04/14
 * Time: 14:26
 */

namespace Kata\Tests;

use Kata\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    private $fizzBuzzObject;

    public function setUp()
    {
        $this->fizzBuzzObject = new FizzBuzz();
    }

    /**
     * @test
     */
    public function FizzBuzzTest()
    {
        $this->assertInstanceOf( 'Kata\FizzBuzz', $this->fizzBuzzObject );
    }

    /**
     * @test
     */
    public function executeSimpleCase()
    {
        $this->assertEquals(1 , $this->fizzBuzzObject->execute(1));
    }

    /**
     * @test
     */
    public function executeMultiple3Case()
    {
        $this->assertEquals('fizz' , $this->fizzBuzzObject->execute(3));
    }

    /**
     * @test
     */
    public function executeMultiple5Case()
    {
        $this->assertEquals('buzz' , $this->fizzBuzzObject->execute(5));
    }

    /**
     * @test
     */
    public function executeMultiple3And5Case()
    {
        $this->assertEquals('fizzbuzz' , $this->fizzBuzzObject->execute(15));
    }

    /**
     * @test
     */
    public function executeLoopCase()
    {
        $this->assertEquals('1,2,fizz' , $this->fizzBuzzObject->executeLoop(3));
    }
}
 