<?php

namespace App\Functions;

class DateHelper
{
    const TIMEZONE = 'Europe/Ulyanovsk';

    public function dateToTimestamp($date)
    {
        $day = $date['day'];
        $month = $date['month'];
        $year = $date['year'];
        $timestamp = strtotime("$month/$day/$year");
        return $timestamp;
    }   

    // public function makeTimeStamp($year='', $month='', $day='') 
    // {
    //    if(empty($year)) {
    //        $year = strftime('%Y');
    //    }
    //    if(empty($month)) {
    //        $month = strftime('%m');
    //    }
    //    if(empty($day)) {
    //        $day = strftime('%d');
    //    }
    
    //    return mktime(0, 0, 0, $month, $day, $year);
    // }

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
