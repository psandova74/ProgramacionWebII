<?php
use PHPUnit\Framework\TestCase;

include_once("FizzBuzz.php");
class FizzBuzzTest extends TestCase {

    public function testPrimerNumeroEsUno(){
        $this->assertEquals('1', new (FizzBuzz(1))->getFizzBuzz());
    }

    public function testMultiplosDeTresSonFizz(){
        $this->assertEquals('Fizz', (new FizzBuzz(3))->getFizzBuzz());
        $this->assertEquals('Fizz', (new FizzBuzz(6))->getFizzBuzz());
        $this->assertEquals('Fizz', (new FizzBuzz(9))->getFizzBuzz());
    }

    public function testMultiplosDeCincoSonBuzz(){
        $this->assertEquals('Buzz', (new FizzBuzz(5))->getFizzBuzz());
        $this->assertEquals('Buzz', (new FizzBuzz(10))->getFizzBuzz());
        $this->assertEquals('Buzz', (new FizzBuzz(20))->getFizzBuzz());
    }

    public function testMultiplosDeTresCincoSonFizzBuzz(){
        $this->assertEquals('FizzBuzz', (new FizzBuzz(15))->getFizzBuzz());
        $this->assertEquals('FizzBuzz', (new FizzBuzz(30))->getFizzBuzz());
        $this->assertEquals('FizzBuzz', (new FizzBuzz(45))->getFizzBuzz());
    }
}