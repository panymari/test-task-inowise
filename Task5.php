<?php

namespace src;

class Task5
{
    public function fib(int $index): int
    {
        if ($index <= 1) {
            return $index;
        }

        return $this->fib($index - 1) + $this->fib($index - 2);
    }

    public function main(int $n): int
    {
        $index = 1;
        $firstNumber = 0;
        $secondNumber = 1;

        while (true) {
            $fibNum = $firstNumber + $secondNumber;
            $index += 1;
            $firstNumber = $secondNumber;
            $secondNumber = $fibNum;

            if (intval($fibNum / (10 ** ($n - 1))) > 0) {
                break;
            }

            if ($secondNumber === $firstNumber && $secondNumber > 1) {
                throw new \InvalidArgumentException("This result isn't reliable");
            }
        }
        return $this->fib($index);
    }
}

