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
    const LENGTH_EQUAL = 1;
    const LENGTH_INFERIOR = 2;
    const LENGTH_SUPERIOR = 3;
    const LENGTH_INFERIOR_OR_EQUAL = 4;
    const LENGTH_SUPERIOR_OR_EQUAL = 5;

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
            throw new \Exception('This parameter needs to be an array');
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
     * @param $operator
     * @param int $integer
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function arrayComparator($array, $operator, $integer)
    {
        if (!is_array($array) || !is_int($integer))
            throw new \Exception('Invalid format');
        if (!in_array($operator, [
            self::LENGTH_EQUAL,
            self::LENGTH_INFERIOR,
            self::LENGTH_SUPERIOR,
            self::LENGTH_SUPERIOR_OR_EQUAL,
            self::LENGTH_INFERIOR_OR_EQUAL,
        ])
        ) {
            throw new \Exception('The second parameter needs to be a valid operator');
        }
        $arrayLength = count($array);
        switch ($operator) {
            case self::LENGTH_EQUAL:
                return $arrayLength === $integer;
            case self::LENGTH_INFERIOR:
                return $arrayLength < $integer;
            case self::LENGTH_SUPERIOR:
                return $arrayLength > $integer;
            case self::LENGTH_INFERIOR_OR_EQUAL:
                return $arrayLength <= $integer;
            case self::LENGTH_SUPERIOR_OR_EQUAL:
                return $arrayLength >= $integer;
        }

        return $operator;
    }

    /**
     * @param array $array
     *
     * @param int $a
     *
     * @param int $b
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function numberElementsBetween($array,$a, $b)
    {
        if(!is_array($array) || !is_int($a) || !is_int($b)){
            throw new \Exception('These parameters need to be an array or int');
        }
        if(count($array) >= $a && count($array) <= $b){
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
            throw new \Exception('These parameters need to be an array and key');
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
            throw new \Exception('These parameters need to be an array and value');
        }
        $valueExist = in_array($value, $array);
        return $valueExist;
    }
}
