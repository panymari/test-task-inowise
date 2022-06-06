<?php

namespace src;

class Task6
{
    public function getDaysInMonth($month, $year): int
    {
        $monthsMap = [1 => 31,
            3 => 31,
            4 => 30,
            5 => 31,
            6 => 30,
            7 => 31,
            8 => 31,
            9 => 30,
            10 => 31,
            11 => 30,
            12 => 31];
        if ($month === 2) {
            if ($year % 4 === 0) {
                if ($year % 100 === 0 && $year % 400 === 0) {
                    return 29;
                } else {
                    return 29;
                }
            } else {
                return 28;
            }
        }
        return $monthsMap[$month];
    }

    public function getDayOfTheWeek(string $day): int
    {
        return match ($day) {
            'Monday' => 1,
            'Tuesday' => 2,
            'Wednesday' => 3,
            'Thursday' => 4,
            'Friday' => 5,
            'Saturday' => 6,
            'Sunday' => 7,
        };
    }

    public function getStartDayOfTheWeek(int $year): int
    {
        $years = $year - 1900;
        $leapYears = ($years - 1) / 4;
        $days = $years * 365 + $leapYears;
        $dayOfWeek = $days % 7;
        return $dayOfWeek + 1;
    }

    public function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        $startDayOfTheWeek = $this->getStartDayOfTheWeek($year);
        $firstsOnMondays = 0;
        $findDay = $this->getDayOfTheWeek($day);

        foreach (range($year, $lastYear) as $year) {
            foreach (range($month, $lastMonth) as $month) {
                if ($startDayOfTheWeek === $findDay) {
                    $firstsOnMondays = $firstsOnMondays + 1;
                }
                $daysInMonth = $this->getDaysInMonth($month, $year);
                $offset = $daysInMonth % 7;
                $startDayOfTheWeek = ($startDayOfTheWeek + $offset) % 7;
            }
        }
        return $firstsOnMondays;
    }
}
