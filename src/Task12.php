<?php

namespace src;

//Write a PHP Calculator class which will accept two values as arguments,
// then add them, subtract them, multiply them together, or divide them on request.
//Provide an opportunity to make calculations by chain.
//
//For example:
//
//$mycalc = new MyCalculator(12, 6);
//echo $mycalc->add(); // Displays 18
//echo $mycalc->multiply(); // Displays 72
//// Calculation by chain
//echo $mycalc->add()->divideBy(9); // Displays 2 ( (12+6)/9=2 )


class Task12
{
    private float $value1;
    private float $value2;
    protected float $result = 0;

    public function __construct($value1, $value2)
    {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    public function getValue1(): float
    {
        return $this->value1;
    }

    public function getValue2(): float
    {
        return $this->value2;
    }

    public function getResult(): float
    {
        return $this->result;
    }

    public function add(): Task12
    {
        $this->result = $this->getValue1() + $this->getValue2();
        return $this;
    }

    public function subtract(): Task12
    {
        $this->result = $this->getValue1() - $this->getValue2();
        return $this;
    }

    public function multiply(): Task12
    {
        $this->result = $this->getValue1() * $this->getValue2();
        return $this;
    }

    public function divide(): Task12
    {
        $this->result = $this->getValue1() / $this->getValue2();
        return $this;
    }

    public function divideBy(float $input): float
    {
        return $this->result / $input;
    }
}
