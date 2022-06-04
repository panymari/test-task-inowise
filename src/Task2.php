<?php

namespace src;

//Task 2. Create a simple 'birthday countdown' script, the script
// counts the number of days left until the person’s birthday. Your
// script should determine the number of days based on the current date.
//Func args: (string $date).
//Acceptable date format is ’DD.MM.YYYY’

class Task2
{
    public function main(string $date): string
    {
        $dayMonth = substr($date, 0, 5);
        $nextYearDate = $dayMonth . "." . date("Y") + 1;

        $currentDate = strtotime(date("d-m-Y"));
        $currentDateNextYear = strtotime($nextYearDate);
        $targetDate = strtotime($date);

        if ($targetDate > $currentDate) {
            $difference = $currentDate - $targetDate;
        } else {
            $difference = $currentDateNextYear - $targetDate;
        }

        $daysLeft = round($difference / (60 * 60 * 24));

        return abs($daysLeft);
    }
}
