<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 25/11/2014
 * Time: 00:45
 */

namespace Tests\Sohuth\Validator;;

use \Sohuth\Validator\ArrayValidator;

/**
 * Class ArrayValidatorTest
 * @package Tests\Validator\ArrayV
 */
class ArrayValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if the array is empty
     *
     * @throws \Exception
     */
    public function testIsEmpty()
    {
        $array = array();
        $bool = ArrayValidator::isEmpty($array);
        $this->assertTrue($bool);
    }

    /**
     * Test if the array is not empty
     *
     * @throws \Exception
     */
    public function testIsNotEmpty()
    {
        $array = array('key' => 'value');
        $bool = ArrayValidator::isEmpty($array);
        $this->assertFalse($bool);
    }

    /**
     * Test if the array is equal to a number
     *
     * @throws \Exception
     */
    public function testArrayIsEqualTo()
    {
        $array = array('Test' => 1);
        $bool = ArrayValidator::arrayComparator($array, ArrayValidator::LENGTH_EQUAL, 1);
        $this->assertTrue($bool);
    }

    /**
     * Test if the array is not equal to a number
     *
     * @throws \Exception
     */
    public function testArrayIsNotEqualTo()
    {
        $array = array('Test' => 1);
        $bool = ArrayValidator::arrayComparator($array, ArrayValidator::LENGTH_EQUAL, 3);
        $this->assertFalse($bool);
    }

    /**
     * Test if the array is inferior to a number
     *
     * @throws \Exception
     */
    public function testArrayIsInferior()
    {
        $array = array('SEVRAN' => 5, 'OKLM' => 10);
        $bool = ArrayValidator::arrayComparator($array, ArrayValidator::LENGTH_INFERIOR, 10);
        $this->assertTrue($bool);
    }

    /**
     * Test if the array is superior to a number
     *
     * @throws \Exception
     */
    public function testArrayIsSuperior()
    {
        $array = array('SEVRAN' => 5, 'OKLM' => 10);
        $bool = ArrayValidator::arrayComparator($array, ArrayValidator::LENGTH_SUPERIOR, 1);
        $this->assertTrue($bool);
    }

    /**
     * Test if the array's item is inferior or equal to a value
     *
     * @throws \Exception
     */
    public function testArrayIsInferiorOrEqual()
    {
        $array = array('SEVRAN' => 5, 'OKLM' => 10);
        $bool = ArrayValidator::arrayComparator($array, ArrayValidator::LENGTH_INFERIOR_OR_EQUAL, 2);
        $this->assertTrue($bool);
    }

    /**
     * Test if the array's item is superior or equal to a value
     *
     * @throws \Exception
     */
    public function testArrayIsSuperiorOrEqual()
    {
        $array = array('SEVRAN' => 5, 'OKLM' => 10);
        $bool = ArrayValidator::arrayComparator($array, ArrayValidator::LENGTH_SUPERIOR_OR_EQUAL, 2);
        $this->assertTrue($bool);
    }

    /**
     * Test if the array length is between two integer
     *
     * @throws \Exception
     */
    public function testIsBetween()
    {
        $array = array('SEVRAN' => 5, 'OKLM' => 10);
        $bool = ArrayValidator::numberElementsBetween($array, 1, 2);
        $this->assertTrue($bool);
    }

    /**
     * Test if the array length is not between two integer
     *
     * @throws \Exception
     */
    public function testIsNotBetween()
    {
        $array = array('SEVRAN' => 5, 'OKLM' => 10);
        $bool = ArrayValidator::numberElementsBetween($array, 3, 5);
        $this->assertFalse($bool);
    }

    /**
     * Test if the value exists in a array
     *
     * @throws \Exception
     */
    public function testValueInArray()
    {
        $array = array('SEVRAN' => 5, 'OKLM' => 10);
        $bool = ArrayValidator::valueExists($array, '3');
        $this->assertTrue($bool);
    }

    /**
     * Test if the value exists in a array
     *
     * @throws \Exception
     */
    public function testNotValueInArray()
    {
        $array = array('SEVRAN' => 5, 'OKLM' => 10);
        $bool = ArrayValidator::valueExists($array, '4');
        $this->assertFalse($bool);
    }

    /**
     * Test if the key exists in a array
     *
     * @throws \Exception
     */
    public function testKeyInArray()
    {
        $array = array('SEVRAN' => 5, 'OKLM' => 10);
        $bool = ArrayValidator::keyExists($array, 'SEVRAN');
        $this->assertTrue($bool);
    }

    /**
     * Test if the key exists in a array
     *
     * @throws \Exception
     */
    public function testNotKeyInArray()
    {
        $array = array('SEVRAN' => 5, 'OKLM' => 10);
        $bool = ArrayValidator::keyExists($array, '92IZI');
        $this->assertFalse($bool);
    }
}
