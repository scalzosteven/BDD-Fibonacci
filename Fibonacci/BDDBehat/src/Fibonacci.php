<?php
namespace App\BDDBehat\src;

class Fibonacci
{
    public function getValueByIndex($index){

        if($index == 1){
            return 0;
        } else if($index == 2){
            return 1;
        }
    }
}