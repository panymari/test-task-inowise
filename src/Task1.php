<?php

namespace src;

//Task 1. Write a PHP function to test whether a number is greater than 30,
// 20 or 10 using a ternary operator.
//
//Input args: (int $inputNumber)
//Output args: Function must be return one value from list:
//More than 30
//More than 20
//More than 10
//Less than 10

class Task1
{
    public function main(int $inputNumber): string
    {
        return $inputNumber > 30
            ? "More than 30"
            : ($inputNumber > 20
                ? "More than 20"
                : ($inputNumber > 10
                    ? "More than 30"
                    : "Less than 10"));
    }
}
