<?php

class Calculator{
    
    public function add(int $number1,int $number2){
        return $number1 + $number2;
    }
    
    public function multiply(int $number1,int $number2){
        return $number1 * $number2;
    }

    public function subs(int $number1,int $number2){
        return $number1 - $number2;
    }

    public function div(int $number1,int $number2){
        if($number2 === 0)
                $number2 = 1;
        return $number1 / $number2;
    }
}