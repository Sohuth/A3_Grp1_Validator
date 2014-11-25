<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 25/11/2014
 * Time: 00:41
 */

namespace Tests\Validator\StringV;

use \Validator\StringV\StringValidator;

/**
 * Class StringValidatorTest
 * @package Tests\Validator\StringV
 */
class StringValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if the string is equal to length
     *
     * @throws \Exception
     */
    public function testStringIsEqual(){
        $string = "azertyuiopqsdfghjklmwxcvbn";
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthEqual($string,$length);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the string is not equal to length
     *
     * @throws \Exception
     */
    public function testStringIsNotEqual(){
        $string = "azertyuiopqsdfghjklmwxcvbn";
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthEqual($string, $length - 5);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the string is superior to int
     *
     * @throws \Exception
     */
    public function testStringIsSuperior(){
        $string = "azertyuiopqsdfghjklmwxcvbn";
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthSuperior($string , $length - 10);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the string is not superior to int
     *
     * @throws \Exception
     */
    public function testStringIsNotSuperior(){
        $string = "azertyuiopqsdfghjklmwxcvbn";
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthSuperior($string , $length + 10);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the string is inferior to int
     *
     * @throws \Exception
     */
    public function testStringIsInferior(){
        $string = "azertyuiopqsdfghjklmwxcvbn";
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthInferior($string , $length + 10);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the string is not inferior to int
     *
     * @throws \Exception
     */
    public function testStringIsNotInferior(){
        $string = "azertyuiopqsdfghjklmwxcvbn";
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthInferior($string , $length - 10);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the string is between two int
     *
     * @throws \Exception
     */
    public function testStringIsBetween(){
        $string = "azertyuiopqsdfghjklmwxcvbn";
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthBetween($string , $length - 10, $length + 10);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the string is not between two int
     *
     * @throws \Exception
     */
    public function testStringIsNotBetween(){
        $string = "azertyuiopqsdfghjklmwxcvbn";
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthBetween($string , $length + 10, $length - 10);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the string has no white space ar the start or the end
     *
     * @throws \Exception
     */
    public function testNoWhiteSpaceBeginningEnd(){
        $string = "azertyuiopqsdfghjklmwxcvbn";
        $boolean = StringValidator::noWhiteSpaceBeginningEnd($string);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the string has white space at the start or the end
     *
     * @throws \Exception
     */
    public function testWithWhiteSpaceBeginningEnd(){
        $string = " azertyuiopqsdfghjklmwxcvbn ";
        $boolean = StringValidator::noWhiteSpaceBeginningEnd($string);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the generated string has no whitespace
     *
     * @throws \Exception
     */
    public function testNoWhiteSpace(){
        $string = "azertyuiopqsdfghjklmwxcvbn";
        $boolean = StringValidator::noWhiteSpace($string);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the generated string has no whitespace
     *
     * @throws \Exception
     */
    public function testWithWhiteSpace(){
        $string = "azertyuiop qsdfghjklm wxcvbn";
        $boolean = StringValidator::noWhiteSpace($string);
        $this->assertFalse($boolean);
    }
}
