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
    public function If_Index_Is_One_Value_Is_Zero(){
        $nextItemNumber = $this->fibonacci->getValueByIndex(1);
        $this->assertEquals(0,$nextItemNumber,
            sprintf('Result for index 1 should be a 0 and got %s', $nextItemNumber));
    }

    /**
     * @test
     */
    public function If_Index_Is_Two_Value_Is_One(){
        $nextItemNumber = $this->fibonacci->getValueByIndex(2);
        $this->assertEquals(1,$nextItemNumber,
            sprintf('Result for index 2 should be a 1 and got %s', $nextItemNumber));
    }

    /**
     * @test
     */
    public function If_Index_Is_Three_Value_Is_One(){
        $nextItemNumber = $this->fibonacci->getValueByIndex(3);
        $this->assertEquals(1,$nextItemNumber,
            sprintf('Result for index 3 should be a 1 and got %s', $nextItemNumber));
    }

    /**
     * @test
     */
    public function Six_First_Fibonacci_Sequence_Numbers(){

        $pairs = ['1' => 0, '2' => 1, '3' => 1, '4' => 2, '5' => 3, '6' => 5];

        foreach ($pairs as $index => $value){
            $nextItemNumber = $this->fibonacci->getValueByIndex((int)$index);

            $this->assertEquals($value, $nextItemNumber,
                sprintf('Result for index %d should be a %d and got %d', $index, $value, $nextItemNumber));
        }

    }
}
