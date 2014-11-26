<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 23/11/2014
 * Time: 17:11
 */

namespace Sohuth\Validator;

/**
 * Class DateTimeValidator
 * @package Sohuth\Validator
 */
class DateTimeValidator
{
    /**
     * @param \DateTime $date
     *
     * @return bool
     *
     */
    public static function isMajor(\DateTime $date) {
        $dateNow = new \DateTime();
        $a       = $date->diff($dateNow)->y;
        $isMajor = $a >= 18;
        return $isMajor;
    }

    /**
     * @param int $year
     * @param \DateTime $date
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isYear(\DateTime $date, $year) {
        if (is_int($year) === false)
            throw new \Exception('This parameter needs to be int');
        $dateYear = $date->format('Y') == $year;
        return $dateYear;
    }
    /**
     * @param \Datetime $date
     * @param int $month
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isMonth(\Datetime $date, $month) {
        if (is_int($month) === false)
            throw new \Exception('This parameter needs to be int');
        $dateMonth = $date->format('m') == $month;
        return $dateMonth;
    }
    /**
     * @param \Datetime $date
     * @param int $day
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isDay(\Datetime $date, $day) {
        if (is_int($day) === false)
            throw new \Exception('This parameter needs to be int');
        $dateDay = $date->format('d') == $day;
        return $dateDay;
    }
}
