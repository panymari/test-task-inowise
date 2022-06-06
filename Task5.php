<?php

namespace src;

class Task5
{
    public function main(int $n): int
    {
        $s = (int)(sqrt(5 * $n ** 2 + 4));

        if ($s ** 2 == 5 * $n ** 2 + 4 || $s ** 2 == 5 * $n ** 2 - 4) {
            return $n;
        } else {
            return $this->main($n + 1);
        }
    }
}
