<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 25/11/2014
 * Time: 00:46
 */

namespace Tests\Sohuth\Validator;

use \Sohuth\Validator\DateTimeValidator;

/**
 * Class DateTimeValidatorTest
 * @package Tests\Sohuth\Validator
 */
class DateTimeValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if the date is major
     *
     * @throws \Exception
     */
    public function testIsMajor()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('08/07/1994 00:00:00');
        $bool = DateTimeValidator::isMajor($date);
        $this->assertTrue($bool);
    }

    /**
     * Test if the date is not major
     *
     * @throws \Exception
     */
    public function testIsNotMajor()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('01/01/2014 00:00:00');
        $bool = DateTimeValidator::isMajor($date);
        $this->assertFalse($bool);
    }

    /**
     * Test if the date's year is equal
     *
     * @throws \Exception
     */
    public function testIsYear()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('01/01/2014 00:00:00');
        $bool = DateTimeValidator::isYear($date, 2014);
        $this->assertTrue($bool);
    }

    /**
     * Test if the date's year is not equal
     *
     * @throws \Exception
     */
    public function testIsNotYear()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('01/01/2014 00:00:00');
        $bool = DateTimeValidator::isYear($date, 2015);
        $this->assertFalse($bool);
    }

    /**
     * Test if the date's month is equal
     *
     * @throws \Exception
     */
    public function testIsMonth()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('01/01/2014 00:00:00');
        $bool = DateTimeValidator::isMonth($date, 01);
        $this->assertTrue($bool);
    }

    /**
     * Test if the date's month is not equal
     *
     * @throws \Exception
     */
    public function testIsNotMonth()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('01/01/2014 00:00:00');
        $bool = DateTimeValidator::isMonth($date, 12);
        $this->assertFalse($bool);
    }

    /**
     * Test if the date's day is equal
     *
     * @throws \Exception
     */
    public function testIsDay()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('01/01/2014 00:00:00');
        $bool = DateTimeValidator::isDay($date, 01);
        $this->assertTrue($bool);
    }

    /**
     * Test if the date's day is not equal
     *
     * @throws \Exception
     */
    public function testIsNotDay()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('01/01/2014 00:00:00');
        $bool = DateTimeValidator::isDay($date, 02);
        $this->assertFalse($bool);
    }
}
