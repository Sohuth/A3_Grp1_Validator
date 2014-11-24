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
    public static function equal($integer, $equal){
        if(!is_int($integer) || !is_int($equal)){
            throw new \Exception('These parameters need to be int');
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
     * @param int $a
     * @param int $b
     *
     * @throws \Exception
     *
     * @return bool
     */
    public static function between($integer, $a, $b){
        if(!is_int($integer) || !is_int($a) || !is_int($b)){
            throw new \Exception('These parameters need to be int');
        }
        if($integer >= $b && $integer <= $b){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param int $integer
     * @param int $a
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function superior($integer, $a){
        if(!is_int($integer) || !is_int($a)){
            throw new \Exception('These parameters need to be int');
        }
        if($integer >= $a){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param int $integer
     * @param int $a
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function inferior($integer, $a){
        if(!is_int($integer) || !is_int($a)){
            throw new \Exception('These parameters need to be int');
        }
        if($integer <= $a){
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
            throw new \Exception('This parameter needs to be int');
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
            throw new \Exception('This parameter needs to be int');
        }
        if($integer >= 0){
            return true;
        }
        else{
            return false;
        }
    }
}
