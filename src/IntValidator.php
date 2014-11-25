<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 23/11/2014
 * Time: 17:10
 */
namespace Sohuth\Validator;
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
    public static function equal($integer, $equal) {
        if (is_int($integer) === false || is_int($equal) === false)
            throw new \Exception('These parameters need to be int');
        $isequal = $integer === $equal;
        return $isequal;
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
    public static function between($integer, $a, $b) {
        if (is_int($integer) === false || is_int($a) === false || is_int($b) === false)
            throw new \Exception('These parameters need to be int');
        $between = $integer >= $a && $integer <= $b;
        return $between;
    }

    /**
     * @param int $integer
     * @param int $a
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function superior($integer, $a) {
        if (is_int($integer) === false || is_int($a) === false)
            throw new \Exception('These parameters need to be int');
        $superior = $integer >= $a;
        return $superior;
    }

    /**
     * @param int $integer
     * @param int $a
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function inferior($integer, $a) {
        if (is_int($integer) === false || is_int($a) === false)
            throw new \Exception('These parameters need to be int');
        $inferior = $integer <= $a;
        return $inferior;
    }

    /**
     * @param $integer
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function negative($integer) {
        if (is_int($integer) === false)
            throw new \Exception('These parameters need to be int');
        $negative = $integer <= 0;
        return $negative;
    }

    /**
     * @param $integer
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function positive($integer) {
        if (is_int($integer) === false)
            throw new \Exception('These parameters need to be int');
        $positive = $integer >= 0;
        return $positive;
    }
}
