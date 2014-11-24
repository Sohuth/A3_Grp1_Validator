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
     * @param \DateTime $birth
     *
     * @return bool
     *
     */
    public static function isMajor($birth)
    {
        $dateNow = new \DateTime();
        $diffBetween = $birth->diff($dateNow);

        if($diffBetween->y >= 18){
            return true;
        }
        else {
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
    public static function isYear($date, $year)
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
}
