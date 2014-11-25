<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 23/11/2014
 * Time: 17:11
 */
namespace Sohuth\Validator;
/**
 * Class BooleanValidator
 * @package Sohuth\Validator
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
    public static function isTrue($boolean) {
        if (is_bool($boolean) === false)
            throw new \Exception('This parameter needs to be a boolean');
        return $boolean;
    }

    /**
     * @param bool $boolean
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isFalse($boolean) {
        if (is_bool($boolean) === false)
            throw new \Exception('This parameter needs to be a boolean');
        return !$boolean;
    }
}
