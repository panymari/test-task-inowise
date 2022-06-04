<?php

namespace src;

//Task 4. Given a string where words are separated by any of the '_', '-', ' '
// characters. Write a function that converts such strings to
// single studly caps case words.
//For example
//Input:     The quick-brown_fox jumps over the_lazy-dog
//Output:    TheQuickBrownFoxJumpsOverTheLazyDog
//Func args:  (string $input)

class Task4
{
    public function main(string $input): string
    {
        if (str_contains($input, "_") || str_contains($input, "-")) {
            $stringWithSpaces = ucwords(str_replace(['-', '_'], ' ', $input));
            return str_replace(' ', '', $stringWithSpaces);
        } else {
            $firstLetterUpperCaseString = ucwords($input);
            return str_replace(' ', '', $firstLetterUpperCaseString);
        }
    }
}
