<?php

namespace src;

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
        if ($this->getValue2() == 0) {
            throw new \InvalidArgumentException('Division by zero');
        }
        $this->result = $this->getValue1() / $this->getValue2();

        return $this;
    }

    public function divideBy(float $input): float
    {
        if ($input == 0) {
            throw new \InvalidArgumentException('Division by zero');
        }

        return $this->result / $input;
    }
    public function multiplyBy(float $input): float
    {
        return $this->result * $input;
    }
}
