<?php

namespace App\Functions;

class DateHelper
{
    const TIMEZONE = 'Europe/Ulyanovsk';

    const MONTH_WITH_31_DAYS = [1, 3, 5, 7, 8, 10, 12];
    const MONTH_WITH_30_DAYS = [4, 6, 9, 11];

    public static function isLeap($year)
    {
        return date("L", mktime(0,0,0, 7,7, $year));
    }

    public static function validateDate($date)
    {
        $isLeap = self::isLeap($date['year']);

        if ($isLeap) {
            dd('высокосный');
        } else {
            dd('не высокосный');
        }

        // if ($date['month'] =)

    }

    public function dateToTimestamp($date)
    {
        $day = $date['day'];
        $month = $date['month'];
        $year = $date['year'];
        $timestamp = strtotime("$month/$day/$year");
        return $timestamp;
    }   

    public static function convertTimestampToDate($timestamp) {
        $date = new \DateTime();
        $date->setTimestamp($timestamp);
        return $date;
    }

    public static function getCurrentDate() 
    {
        $now = new \DateTime();
        $now->settime(0,0);
        $timezone = new \DateTimeZone(self::TIMEZONE); // needs to make setting by localization
        $now->setTimezone($timezone);

        return $now;
    }

    public static function getDiffDate($nowDate, $compare_date) {

        $difference = $nowDate->diff($compare_date)->format('%R%a');

        return $difference;
    }

}
