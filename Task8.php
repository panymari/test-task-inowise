<?php

namespace src;

class Task8
{
    public function main($json): array
    {
        if (!is_string($json) || ctype_digit($json)) {
            throw new \InvalidArgumentException('Invalid input!');
        }
        $j = json_decode($json, true);

        return array_merge($j);
    }
}
