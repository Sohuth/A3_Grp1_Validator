<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 23/11/2014
 * Time: 17:11
 */
namespace Validator\BooleanV;
/**
 * Class BooleanValidator
 * @package Validator\Boolean
 */
class BooleanValidator
{
    /**
     * @param bool $boolean
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isTrue($boolean)
    {
        if(!is_bool($boolean)){
            throw new \Exception('The parameter need to be a boolean');
        }
        if(!$boolean){
            return false;
        }
        else{
            return true;
        }
    }

    /**
     * @param bool $boolean
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isFalse($boolean)
    {
        if(!is_bool($boolean)){
            throw new \Exception('The parameter need to be a boolean');
        }
        if(!$boolean){
            return true;
        }
        else{
            return false;
        }
    }
}
