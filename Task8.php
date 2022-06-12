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

        $arr = [];
        foreach ($obj as $item => $value) {
            if (is_array($value)) {
                $arrKey = implode(array_keys($value));
                $arrValue = implode(array_values($value));
                array_push($arr, "{$arrKey}: {$arrValue}");
            } else {
                array_push($arr, "{$item}: {$value}\r\n");
            }
        }

        return implode($arr);
    }
}
