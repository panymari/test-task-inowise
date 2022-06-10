<?php

namespace src;

class Task12
{
    private int $value1;
    private int $value2;
    protected int $result = 0;

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

    public function getResult(): int
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

    public function divideBy(int $input): int
    {
        if ($input == 0) {
            throw new \InvalidArgumentException('Division by zero');
        }

        if ($this->result === 0) {
            return $input;
        } else {
            $this->result /= $input;

            return $this->result;
        }
    }
    public function multiplyBy(int $input): int
    {
        if ($this->result === 0) {
            return $input;
        } else {
            $this->result *= $input;

            return $this->result;
        }
    }
    public function subtractBy(int $input): int
    {
        if ($this->result === 0) {
            return $input;
        } else {
            $this->result -= $input;

            return $this->result;
        }
    }
    public function addBy(int $input): int
    {
        if ($this->result === 0) {
            return $input;
        } else {
            $this->result += $input;

            return $this->result;
        }
    }
}

$t = new Task12(12, 15);
echo $t->add()->divideBy(2);
