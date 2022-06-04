<?php

namespace src;

//Write a PHP program to find three numbers from an array such that the sum of
// three consecutive numbers equal to a given number.
//Input:
//
//Array: [2, 7, 7, 1, 8, 2, 7, 8, 7]
//Number: 16
//Output:
//Array
//(
//    [0] => 2 + 7 + 7 = 16
//[1] => 7 + 1 + 8 = 16
//)
//
//Func args: (array $arr, int $number)

class Task9
{
    public function getSumOfThreeNumbers(array $arr, int $number): array
    {
        $result = [];
        for ($i = 0; $i < count($arr) - 2; $i++) {
            if ($arr[$i] + $arr[$i + 1] + $arr[$i + 2] === $number) {
                array_push($result, "{$arr[$i]} + {$arr[$i+1]} + {$arr[$i+2]} = $number");
            }
        }
        return $result;
    }
}
