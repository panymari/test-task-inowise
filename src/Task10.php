<?php

namespace src;

//Write a PHP program to implement Collatz conjecture: where you take any
// positive integer n, if n is even, divide it by 2 to get n / 2. If n is odd,
// multiply it by 3 and add 1 to obtain 3n + 1. Repeat the process until you
// reach 1 (the conjecture is that no matter what number you start with,
// you will always eventually reach 1). Push the result of
// each intermediate operation into an array.
//
//Input: 12
//Output:
//Array
//(
//    [0] => 12
//[1] => 6
//[2] => 3
//[3] => 10
//[4] => 5
//[5] => 16
//[6] => 8
//[7] => 4
//[8] => 2
//[9] => 1
//)
//
//Func args: (int $input)

class Task10
{
    public function main(int $input): array
    {
        $resultArr[] = $input;
        if ($input < 1) {
            throw new \InvalidArgumentException("Input must be only positive value!");
        }
        while ($input > 1) {
            if ($input % 2 === 0) {
                $input = $input / 2;
            } else {
                $input = $input * 3 + 1;
            }
            array_push($resultArr, $input);
        }
        return $resultArr;
    }
}
