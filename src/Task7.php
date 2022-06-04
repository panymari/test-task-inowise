<?php

namespace src;

//Given a list of values. Delete the element from the list in the 'n' position.
// After deleting the element, integer keys must be normalized.
// Use function array_values()  is forbidden
//For example,
//    Input:
//
//    $arr = [1, 2, 3, 4, 5];
//    var_dump($arr);
//    array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
//$n = 3Output:$arr = [1, 2, 3, 5];
//var_dump($arr);
//array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }
//
//Func args: (array $arr, int $position)

class Task7
{
    public function main(array $arr, int $position): array
    {
        if (count($arr) <= $position) {
            throw new \InvalidArgumentException("There is no such position here!");
        }
        array_splice($arr, $position, 1);
        return $arr;
    }
}
