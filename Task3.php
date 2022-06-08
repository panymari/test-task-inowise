<?php

namespace src;

class Task3
{
    public function main($value): int
    {
        if (1 >= $value || !is_integer($value)) {
            throw new \InvalidArgumentException('Invalid input!');
        }

        $digitsArr = str_split($value);

        if (count($digitsArr) > 1) {
            $sumOfDigits = array_reduce($digitsArr, function ($carry, $item) {
                $carry += $item;

                return $carry;
            });

            return $this->main($sumOfDigits);
        } else {
            return intval($digitsArr);
        }
    }
}
