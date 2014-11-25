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
     * Test if the generated string is equal to length
     *
     * @throws \Exception
     */
    public function testGenerateStringIsEqual()
    {
        $string = str_shuffle("azertyuiopqsdfghjklmwxcvbn");
        $length = mb_strlen($string);
        $bool = StringValidator::lengthEqual($string, $length);
        $this->assertTrue($bool);
    }

    /**
     * Test if the generated string is not equal to length
     *
     * @throws \Exception
     */
    public function testGenerateStringIsNotEqual()
    {
        $string = str_shuffle("azertyuiopqsdfghjklmwxcvbn");
        $length = mb_strlen($string);
        $bool = StringValidator::lengthEqual($string, $length - 10);
        $this->assertFalse($bool);
    }

    /**
     * Test if the generated string is superior to int
     *
     * @throws \Exception
     */
    public function testGenerateStringIsSuperior()
    {
        $string = str_shuffle("azertyuiopqsdfghjklmwxcvbn");
        $bool = StringValidator::lengthSuperior($string , 1);
        $this->assertTrue($bool);
    }

    /**
     * Test if the generated string is not superior to int
     *
     * @throws \Exception
     */
    public function testGenerateStringIsNotSuperior()
    {
        $string = str_shuffle("azertyuiopqsdfghjklmwxcvbn");
        $bool = StringValidator::lengthSuperior($string , 9999);
        $this->assertFalse($bool);
    }

    /**
     * Test if the generated string is inferior to int
     *
     * @throws \Exception
     */
    public function testGenerateStringIsInferior()
    {
        $string = str_shuffle("azertyuiopqsdfghjklmwxcvbn");
        $length = mb_strlen($string) + 10;
        $bool = StringValidator::lengthInferior($string , $length);
        $this->assertEquals($bool, true);
    }

    /**
     * Test if the generated string is not inferior to int
     *
     * @throws \Exception
     */
    public function testGenerateStringIsNotInferior()
    {
        $string = str_shuffle("azertyuiopqsdfghjklmwxcvbn");
        $length = mb_strlen($string);
        $bool = StringValidator::lengthInferior($string , $length - 10);
        $this->assertFalse($bool);
    }

    /**
     * Test if the generated string is between two int
     *
     * @throws \Exception
     */
    public function testGenerateStringIsBetween()
    {
        $string = str_shuffle("azertyuiopqsdfghjklmwxcvbn");
        $length = mb_strlen($string);
        $bool = StringValidator::lengthBetween($string , $length - 10, $length + 10);
        $this->assertTrue($bool);
    }

    /**
     * Test if the generated string is not between two int
     *
     * @throws \Exception
     */
    public function testGenerateStringIsNotBetween()
    {
        $string = str_shuffle("azertyuiopqsdfghjklmwxcvbn");
        $length = mb_strlen($string);
        $bool = StringValidator::lengthBetween($string , $length + 10, $length - 10);
        $this->assertFalse($bool);
    }

    /**
     * Test if the generated string has no white space ar the start or the end
     *
     * @throws \Exception
     */
    public function testGenerateStringNoWhiteSpaceBeginningEnd()
    {
        $string = " azertyuiopqsdfghjklmwxcvbn ";
        $bool = StringValidator::noWhiteSpaceBeginningEnd($string);
        $this->assertTrue($bool);
    }

    /**
     * Test if the generated string has white space ar the start or the end
     *
     * @throws \Exception
     */
    public function testGenerateStringWhiteSpaceBeginningEnd()
    {
        $string = "azertyuiopqsdfghjklmwxcvbn";
        $bool = StringValidator::noWhiteSpaceBeginningEnd($string);
        $this->assertFalse($bool);
    }

    /**
     * Test if the generated string has no whitespace
     *
     * @throws \Exception
     */
    public function testGenerateStringNoWhiteSpace()
    {
        $string = "azertyuiop qsdfghjklm wxcvbn";
        $bool = StringValidator::noWhiteSpace($string);
        $this->assertTrue($bool);
    }

    /**
     * Test if the generated string has no whitespace
     *
     * @throws \Exception
     */
    public function testGenerateStringWhiteSpace()
    {
        $string = "azertyuiopqsdfghjklmwxcvbn";
        $bool = StringValidator::noWhiteSpace($string);
        $this->assertFalse($bool);
    }
}
