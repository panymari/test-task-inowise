<?php

namespace src;

class Task9
{
    public function main(array $arr, int $number): array
    {
        if ($number <= 0 || count($arr) === 2) {
            throw new \InvalidArgumentException('Invalid input!');
        }
        $j = 0;
        $result = [];
        for ($i = 0;$i < count($arr) - 2; $i++) {
            if ($arr[$i] + $arr[$i + 1] + $arr[$i + 2] === $number) {
                $result = ["[$j]" => "{$arr[$i]} + {$arr[$i + 1]} + {$arr[$i + 2]} = 0"];
                $j++;
            }
        }

        return $result;
    }
}
