<?php

namespace src;

class Task5
{
    public function main(int $n): string
    {
        if ($n <= 0) {
            throw new \InvalidArgumentException('Invalid input!');
        }
        if ($n === 1) {
            return 0;
        }
        $n1 = 0;
        $n2 = 1;
        $n3 = 0;

        while (strlen(strval($n3)) !== $n) {
            $n3 = $n1 + $n2;
            $n1 = $n2;
            $n2 = $n3;
        }

        return sprintf('%s', $n3);
    }
}
