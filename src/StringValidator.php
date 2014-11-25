<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 23/11/2014
 * Time: 17:11
 */
namespace Sohuth\Validator;
/**
 * Class StringValidator
 * @package Validator\StringV
 */
class StringValidator
{
    /**
     * @param string $string
     * @param int $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthEqual($string, $length) {
        if (is_string($string) === false || is_int($length) === false)
            throw new \Exception('This parameter needs to be a string or int');
        $lengthEqual = mb_strlen($string) === $length;
        return $lengthEqual;
    }

    /**
     * @param string $string
     * @param int $a
     * @param int $b
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthBetween($string, $a, $b) {
        if (is_string($string) === false || is_int($a) === false || is_int($b) === false)
            throw new \Exception('This parameter needs to be a string or int');
        $lengthBetween = mb_strlen($string) >= $a && mb_strlen($string) <= $b;
        return $lengthBetween;
    }

    /**
     * @param string $string
     * @param int $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthSuperior($string, $length) {
        if (is_string($string) === false || is_int($length) === false)
            throw new \Exception('This parameter needs to be a string or int');
        $lengthSuperior = mb_strlen($string) >= $length;
        return $lengthSuperior;
    }

    /**
     * @param string $string
     * @param int $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthInferior($string, $length) {
        if (is_string($string) === false || is_int($length) === false)
            throw new \Exception('This parameter needs to be a string or int');
        $lengthInferior = mb_strlen($string) <= $length;
        return $lengthInferior;
    }

    /**
     * @param string $string
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function noWhiteSpaceBeginningEnd($string) {
        if (is_string($string) === false)
            throw new \Exception('This parameter needs to be a string');
        $noWhiteSpaceBeginningEnd = preg_match('/^\s/', $string) === 0 && preg_match('/\s$/', $string) === 0;
        return $noWhiteSpaceBeginningEnd;
    }
    /**
     * @param string $string
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function noWhiteSpace($string) {
        if (is_string($string) === false)
            throw new \Exception('This parameter needs to be a string');
        $noWhiteSpace = preg_match('/\s/', $string) === 0;
        return $noWhiteSpace;
    }
}
