<?php

namespace src;

class Task2
{
    public function main(string $date): string
    {
        $dayMonth = substr($date, 0, 5);
        $nextYearDate = $dayMonth . '.' . date('Y') + 1;

        $currentDate = strtotime(date('d-m-Y'));
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
