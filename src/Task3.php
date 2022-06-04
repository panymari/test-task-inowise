<?php

namespace src;

//Task 3. Write a PHP program to add the digits by absolute of an integer
// repeatedly until the result has a single digit.
//
//For example
//Input: 5689
//Output: 1
//Explanation: 5689 = 5+6+8+9 = 28 = 2+8 = 10 = 1+0 = 1

class Task3
{
    public function main(int $value): int
    {
        $digitsArr = str_split($value);

        if (count($digitsArr) > 1) {
            $sumOfDigits = array_reduce($digitsArr, function ($carry, $item) {
                $carry += $item;
                return $carry;
            });
            echo $this->main($sumOfDigits);
        } else {
            return intval($digitsArr);
        }
        return 0;
    }
}
