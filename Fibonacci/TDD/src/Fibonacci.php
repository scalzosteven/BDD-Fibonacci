<?php


namespace App\TDD\src;


class Fibonacci
{
    public function getValueByIndex($index){
//        $indexToReturn = null;
//        if($index == 1){
//            $indexToReturn = 0;
//        } else if($index == 2){
//            $indexToReturn = 1;
//        }
        $first = 0;
        $second = 1;
        for($i = 0; $i < ($index - 1); $i++){
            $third = $first + $second;
            $first = $second;
            $second = $third;
        }

        return $first;
    }
}