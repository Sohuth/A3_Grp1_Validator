<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 25/11/2014
 * Time: 00:43
 */

namespace Tests\Validator\BooleanV;

use \Validator\BooleanV\BooleanValidator;

/**
 * Class BooleanValidatorTest
 * @package Tests\Validator\BooleanV
 */
class BooleanValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if the boolean is true
     *
     * @throws \Exception
     */
    public function testIsTrue(){
        $boolean = BooleanValidator::isTrue(true);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the boolean is not true
     *
     * @throws \Exception
     */
    public function testIsNotTrue(){
        $boolean = BooleanValidator::isTrue(false);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the boolean is false
     *
     * @throws \Exception
     */
    public function testIsFalse(){
        $boolean = BooleanValidator::isFalse(false);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the boolean is not false
     *
     * @throws \Exception
     */
    public function testIsNotFalse(){
        $boolean = BooleanValidator::isFalse(true);
        $this->assertFalse($boolean);
    }
}
