<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 23/11/2014
 * Time: 17:10
 */
namespace Validator\IntV;
/**
 * Class IntValidator
 * @package Validator\Int
 */
class IntValidator
{
    /**
     * @param int $integer
     * @param int $equal
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function equal($integer, $equal = 0){
        if(!is_int($integer) || !is_int($equal)){
            throw new \Exception('The parameters need to be int');
        }
        if($integer == $equal){
            return false;
        }
        else{
            return true;
        }
    }

    /**
     * @param int $integer
     * @param int $min
     * @param int $max
     *
     * @throws \Exception
     *
     * @return bool
     */
    public static function between($integer, $min = 0, $max = 10){
        if(!is_int($integer) || !is_int($min) || !is_int($max)){
            throw new \Exception('The parameters need to be int');
        }
        if($integer >= $min && $integer <= $max){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param int $integer
     * @param int $min
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function superior($integer, $min = 0){
        if(!is_int($integer) || !is_int($min)){
            throw new \Exception('The parameters need to be int');
        }
        if($integer >= $min){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param int $integer
     * @param int $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function inferior($integer, $max = 10){
        if(!is_int($integer) || !is_int($max)){
            throw new \Exception('The parameters need to be int');
        }
        if($integer <= $max){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param $integer
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function negative($integer){
        if(!is_int($integer)){
            throw new \Exception('The parameters need to be int');
        }
        if($integer <= 0){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param $integer
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function positive($integer){
        if(!is_int($integer)){
            throw new \Exception('The parameters need to be int');
        }
        if($integer >= 0){
            return true;
        }
        else{
            return false;
        }
    }
}
