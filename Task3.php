<?php

namespace src;

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
