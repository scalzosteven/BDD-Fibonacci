<?php


namespace App\TDD\src;


class Fibonacci
{
    public function getValueByIndex($index){
        $indexToReturn = null;
        if($index == 1){
            $indexToReturn = 0;
        } else if($index == 2){
            $indexToReturn = 1;
        }

        return $indexToReturn;
    }
}