<?php

namespace src;

class Task8
{
    public function main($json): string
    {
        if (!is_string($json) || ctype_digit($json)) {
            throw new \InvalidArgumentException('Invalid input!');
        }
        $obj = json_decode($json, true);
        foreach ($obj as $item => $value) {
            if (is_array($value)) {
                foreach ($value as $value1) {
                    return "{$item}: {$value1} <br>";
                }
            } else {
                return "{$item}: {$value} <br>";
            }
        }
    }
}
