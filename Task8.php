<?php

namespace src;

class Task8
{
    public function main(string $json): array
    {
        return json_decode($json, true);
    }
}
