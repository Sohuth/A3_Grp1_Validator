<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 23/11/2014
 * Time: 17:11
 */
namespace Validator\DateTimeV;
/**
 * Class DateTimeValidator
 * @package Validator\DateTime
 */
class DateTimeValidator
{
    /**
     * @param \DateTime $date
     *
     * @return bool
     *
     */
    public static function isMajor(\DateTime $date)
    {
        $dateNow = new \DateTime();
        $a = $date->diff($dateNow);
        if($a->y >= 18){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param $year
     * @param \DateTime $date
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isYear(\DateTime $date, $year)
    {
        if(!is_int($year)){
            throw new \Exception('This parameter needs to be int');
        }
        if($date->format('Y') == $year){
            return true;
        }
        else{
            return false;
        }
    }
    /**
     * @param \Datetime $date
     * @param int $month
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isMonth(\Datetime $date, $month)
    {
        if(!is_int($month))
            throw new \Exception('The second parameter need to be a integer');
        if((int) $date->format('m') === $month)
            return true;
        else
            return false;
    }
    /**
     * @param \Datetime $date
     * @param int $day
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isDay(\Datetime $date, $day)
    {
        if(!is_int($day))
            throw new \Exception('The second parameter need to be a integer');
        if( (int) $date->format('d') === $day)
            return true;
        else
            return false;
    }
}
