<?php

namespace src;

class Task5
{
    public function sum(string $a, string $b): int
    {
        $maxLength = max(strlen($a), strlen($b));

        $a = str_pad($a, $maxLength, '0', STR_PAD_LEFT);
        $b = str_pad($b, $maxLength, '0', STR_PAD_LEFT);

        $result = '';

        $buf = 0;

        $arr = [];

        for ($i = $maxLength - 1; $i >= 0; $i--) {
            $sum = (int)$a[$i] + (int)$b[$i] + $buf;

            $buf = 0;

            if ($sum > 9) {
                $buf = 1;
                $sum = $sum % 10;
            }

            $arr[] = $sum.$result;
        }

        return implode($arr);
    }
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
            if ($n1 > 2880067194370816120 && $n2 > 4660046610375530309) {
                $n3 = $this->sum($n1, $n2);
            } else {
                $n3 = $n1 + $n2;
            }
            $n1 = $n2;
            $n2 = $n3;
        }

        return sprintf('%s', $n3);
    }
}
