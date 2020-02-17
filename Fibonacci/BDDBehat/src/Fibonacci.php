<?php
namespace App\BDDBehat\src;

class Fibonacci
{
    public function getValueByIndex($index){

//        if($index == 1){
//            return 0;
//        } else if($index == 2){
//            return 1;
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