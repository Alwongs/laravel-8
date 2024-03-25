<?php

namespace App\Functions;

class DateHelper
{
    public function dateToTimestamp($date)
    {
        $day = $date['day'];
        $month = $date['month'];
        $year = $date['year'];
        $timestamp = strtotime("$month/$day/$year");
        return $timestamp;
    }
}
