<?php
class FizzBuzz {
    private $number;

    public function __construct($number) {
        $this->number = $number;
    }

    public function getFizzBuzz() {
        if ($this->number % 3 == 0 && $this->number % 5 == 0) {
            return "FizzBuzz";
        } else if ($this->number % 3 == 0) {
            return "Fizz";
        } else if ($this->number % 5 == 0) {
            return "Buzz";
        }
    }
}