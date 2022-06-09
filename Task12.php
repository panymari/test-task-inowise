<?php

namespace src;

class Task12
{
    private int $value1;
    private int $value2;

    public function __construct($value1, $value2)
    {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    public function getValue1(): int
    {
        return $this->value1;
    }

    public function getValue2(): int
    {
        return $this->value2;
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
        if ($this->getValue2() === 0) {
            throw new \InvalidArgumentException('Division by zero');
        }
        $this->result = $this->getValue1() / $this->getValue2();

        return $this;
    }

    public function divideBy($n1)
    {
        if ($n1 === 0) {
            throw new \InvalidArgumentException('Division by zero');
        }

        return function ($n2) use ($n1) {
            return $n2 / $n1;
        };
    }
    public function multiplyBy($n1)
    {
        return function ($n2) use ($n1) {
            return $n2 * $n1;
        };
    }
    public function subtractBy($n1)
    {
        return function ($n2) use ($n1) {
            return $n2 - $n1;
        };
    }
    public function addBy($n1)
    {
        return function ($n2) use ($n1) {
            return $n2 + $n1;
        };
    }
}
