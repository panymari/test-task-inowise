<?php

namespace src;

class Task8
{
    public function main($json): object
    {
        if (!is_string($json)) {
            throw new \InvalidArgumentException("Invalid input!");
        }
        return json_decode($json);
    }
}

