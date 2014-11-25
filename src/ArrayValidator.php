<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 23/11/2014
 * Time: 17:47
 */
namespace Sohuth\Validator;
/**
 * Class ArrayValidator
 * @package Sohuth\Validator
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
    public static function isEmpty($array) {
        if (is_array($array) === false)
            throw new \Exception('This parameter needs to be an array');
        $arrayEmpty = count($array) === 0;
        return $arrayEmpty;
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
        if (is_array($array) === false || is_int($integer) === false)
            throw new \Exception('Invalid format!');

        if (in_array($operator, [
            self::LENGTH_EQUAL,
            self::LENGTH_INFERIOR,
            self::LENGTH_SUPERIOR,
            self::LENGTH_SUPERIOR_OR_EQUAL,
            self::LENGTH_INFERIOR_OR_EQUAL,
        ]) === false
        )
            throw new \Exception('The second parameter needs to be a valid operator');

        $arrayLength = false;

        switch ($operator) {
            case self::LENGTH_EQUAL:
                $arrayLength = count($array) === $integer;
                break;
            case self::LENGTH_SUPERIOR:
                $arrayLength = count($array) > $integer;
                break;
            case self::LENGTH_INFERIOR:
                $arrayLength = count($array) < $integer;
                break;
            case self::LENGTH_SUPERIOR_OR_EQUAL:
                $arrayLength = count($array) >= $integer;
                break;
            case self::LENGTH_INFERIOR_OR_EQUAL:
                $arrayLength = count($array) <= $integer;
                break;
        }

        return $arrayLength;
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
    public static function numberElementsBetween($array,$a, $b){
        if (is_array($array) === false || is_int($a) === false || is_int($b) === false)
            throw new \Exception('These parameters need to be an array and int');
        $arrayBetween = count($array) >= $a && count($array) <= $b;
        return $arrayBetween;
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
    public static function keyExists($array, $key){
        if (is_array($array) === false || is_string($key) === false)
            throw new \Exception('These parameters need to be an array and key');
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
    public static function valueExists($array, $value){
        if (is_array($array) === false || is_string($value) === false)
            throw new \Exception('These parameters need to be an array and value');
        $arrayValue = in_array($value, $array);
        return $arrayValue;
    }
}
