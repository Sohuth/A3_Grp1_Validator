<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 24/11/2014
 * Time: 11:01
 */
namespace Tests\Sohuth\Validator;

use Sohuth\Validator\IntValidator;

/**
 * Class IntValidatorTest
 * @package Tests\Sohuth\Validator
 */
class IntValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if the generated integer is equal
     *
     * @throws \Exception
     */
    public function testIsEqual(){
        $int = mt_rand(1,10);
        $boolean = IntValidator::equal($int,$int);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the generated integer is  not equal
     *
     * @throws \Exception
     */
    public function testIsNotEqual(){
        $int = mt_rand(1,10);
        $integer = mt_rand(21,30);
        $boolean = IntValidator::equal($int,$integer);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the generated integer is superior
     *
     * @throws \Exception
     */
    public function testIsSuperior(){
        $int = mt_rand(5,10);
        $boolean = IntValidator::superior($int, 1);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the generated integer is not superior
     *
     * @throws \Exception
     */
    public function testIsNotSuperior(){
        $int = mt_rand(5,10);
        $boolean = IntValidator::superior($int, 11);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the generated integer is inferior
     *
     * @throws \Exception
     */
    public function testIsInferior(){
        $int = mt_rand(5,10);
        $boolean = IntValidator::inferior($int, 11);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the generated integer is not inferior
     *
     * @throws \Exception
     */
    public function testIsNotInferior(){
        $int = mt_rand(5,10);
        $boolean = IntValidator::inferior($int, 1);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the generated integer is inferior
     *
     * @throws \Exception
     */
    public function testIsBetween(){
        $int = mt_rand(5,15);
        $boolean = IntValidator::between($int,1,20);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the generated integer is inferior
     *
     * @throws \Exception
     */
    public function testIsNotBetween(){
        $int = mt_rand(5,15);
        $boolean = IntValidator::between($int,16,20);
        $this->assertFalse($boolean);
    }


    /**
     * Test if the generated integer is negative
     *
     * @throws \Exception
     */
    public function testIsNegative(){
        $int = mt_rand(-10,-5);
        $boolean = IntValidator::negative($int);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the generated integer is  not negative
     *
     * @throws \Exception
     */
    public function testIsNotNegative(){
        $int = mt_rand(5,10);
        $boolean = IntValidator::negative($int);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the generated integer is positive
     *
     * @throws \Exception
     */
    public function testIsPositive(){
        $int = mt_rand(5,10);
        $boolean = IntValidator::positive($int);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the generated integer is positive
     *
     * @throws \Exception
     */
    public function testIsNotPositive(){
        $int = mt_rand(-10,-5);
        $boolean = IntValidator::positive($int);
        $this->assertFalse($boolean);
    }
}
