<?php

namespace src;

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
