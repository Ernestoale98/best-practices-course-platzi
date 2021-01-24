<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase{
    
    public function testAddWillReturnTheSumOfItsParameters(){
        $sut = new Calculator();
        
        $this->assertEquals(8,$sut->add(5,3));
        $this->assertEquals(10,$sut->add(10,0));
        $this->assertEquals(18,$sut->add(15,3));
    }

    public function testMultiplyWillReturnTheMultiplicationOfItsParameters(){
        $sut = new Calculator();
        
        $this->assertEquals(8,$sut->multiply(4,2));
        $this->assertEquals(10,$sut->multiply(5,2));
        $this->assertEquals(1000,$sut->multiply(10,100));
    }

    public function testSubtractWillReturnTheSubtractionOfItsParameters(){
        $sut = new Calculator();
        
        $this->assertEquals(2,$sut->subs(4,2));
        $this->assertEquals(3,$sut->subs(5,2));
        $this->assertEquals(-90,$sut->subs(10,100));
    }


    public function testDividetWillReturnTheDividationOfItsParameters(){
        $sut = new Calculator();
        
        $this->assertEquals(4,$sut->div(4,0));
        $this->assertEquals(3,$sut->div(6,2));
        $this->assertEquals(10,$sut->div(100,10));
    }

}