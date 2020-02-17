<?php

namespace App\TDD\test;
use App\TDD\src\Fibonacci;
use PHPUnit_Framework_TestCase;

class FibonacciTest extends PHPUnit_Framework_TestCase
{
    private $fibonacci;

    public function setUp()
    {
        $this->fibonacci = new Fibonacci();
    }


    /**
     * @test
     */
    public function If_Index_Value_Is_Zero(){
        $nextItemNumber = $this->fibonacci->getValueByIndex(1);
        $this->assertEquals(0,$nextItemNumber,
            sprintf('Result for index 1 should be a 0 and got %s', $nextItemNumber));
    }
}