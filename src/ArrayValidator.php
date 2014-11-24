<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 23/11/2014
 * Time: 17:47
 */
namespace Validator\ArrayV;
/**
 * Class ArrayValidator
 * @package Validator\Array
 */
class ArrayValidator
{
    /**
     * @param array $array
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isEmpty($array)
    {
        if(!is_array($array)){
            throw new \Exception('This parameter must be an array');
        }
        if(count($array) == 0){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param array $array
     *
     * @param int $number
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function numberElementsEquals($array, $number = 10)
    {

    }

    /**
     * @param array $array
     *
     * @param int $number
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function numberElementsSuperior($array, $number = 10)
    {

    }

    /**
     * @param array $array
     *
     * @param int $number
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function numberElementsSuperiorOrEqual($array, $number = 10)
    {

    }

    /**
     * @param array $array
     *
     * @param int $number
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function numberElementsInferior($array, $number = 10)
    {

    }

    /**
     * @param array $array
     *
     * @param int $number
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function numberElementsInferiorOrEqual($array, $number = 10)
    {

    }

    /**
     * @param array $array
     *
     * @param int $min
     *
     * @param int $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function numberElementsBetween($array,$min = 0, $max = 10)
    {
        if(!is_array($array) || !is_int($min) || !is_int($max)){
            throw new \Exception('Parameter must be in the correct type');
        }
        if(count($array) >= $min && count($array) <= $max){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param string $key
     *
     * @param array $array
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function keyExists($array, $key)
    {
        if(!is_array($array) || !is_string($key)){
            throw new \Exception('Parameter must be in the correct type');
        }
        $arrayKey = array_key_exists($key, $array);
        return $arrayKey;
    }

    /**
     * @param string $value
     *
     * @param array $array
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function valueExists($array, $value)
    {
        if(!is_array($array) || !is_string($value)){
            throw new \Exception('Parameter must be in the correct type');
        }
        $valueExist = in_array($value, $array);
        return $valueExist;
    }
}
