<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 25/11/2014
 * Time: 00:46
 */

namespace Tests\Validator\DateTimeV;

use \Validator\DateTimeV\DateTimeValidator;

/**
 * Class DateTimeValidatorTest
 * @package Tests\Validator\DateTimeV
 */
class DateTimeValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if the date is major (over 18 years)
     *
     * @throws \Exception
     */
    public function testIsMajor()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $birthdate = new \DateTime('12/14/1993 00:00:00');
        $bool = DateTimeValidator::isMajor($birthdate);
        $this->assertTrue($bool);
    }

    /**
     * Test if the date is not major (over 18 years)
     *
     * @throws \Exception
     */
    public function testIsNotMajor()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $birthdate = new \DateTime('12/14/2000 00:00:00');
        $bool = DateTimeValidator::isMajor($birthdate);
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
        $date = new \DateTime('12/14/2010 00:00:00');
        $bool = DateTimeValidator::isYear($date, 2010);
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
        $date = new \DateTime('12/14/2010 00:00:00');
        $bool = DateTimeValidator::isYear($date, 2012);
        $this->assertFalse($bool);
    }

    /**
     * Test if the date's year is equal
     *
     * @throws \Exception
     */
    public function testIsMonth()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('12/14/2010 00:00:00');
        $bool = DateTimeValidator::isMonth($date, 12);
        $this->assertTrue($bool);
    }

    /**
     * Test if the date's year is not equal
     *
     * @throws \Exception
     */
    public function testIsNotMonth()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('12/14/2010 00:00:00');
        $bool = DateTimeValidator::isMonth($date, 11);
        $this->assertFalse($bool);
    }

    /**
     * Test if the date's year is equal
     *
     * @throws \Exception
     */
    public function testIsDay()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('12/14/2010 00:00:00');
        $bool = DateTimeValidator::isDay($date, 14);
        $this->assertTrue($bool);
    }

    /**
     * Test if the date's year is not equal
     *
     * @throws \Exception
     */
    public function testIsNotDay()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('12/14/2010 00:00:00');
        $bool = DateTimeValidator::isDay($date, 11);
        $this->assertFalse($bool);
    }
}
