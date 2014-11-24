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
     * @param DateTime $date
     *
     * @return bool
     *
     */
    public static function isMajor($date)
    {

    }

    /**
     * @param $year
     * @param DateTime $date
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isYear($date, $year)
    {
        if(!is_int($year)){
            throw new \Exception('This parameter must be int');
        }
        if($date->format('Y') == $year){
            return true;
        }
        else{
            return false;
        }
    }
}
