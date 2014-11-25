<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 22/11/2014
 * Time: 16:02
 */

require __DIR__.'/vendor/autoload.php';

$equal = \Sohuth\Validator\IntValidator::equal(10, 10);
$superior = \Sohuth\Validator\IntValidator::superior(10, 5);
$inferior = \Sohuth\Validator\IntValidator::inferior(5, 10);
$between = \Sohuth\Validator\IntValidator::between(5, 0, 10);
$negative = \Sohuth\Validator\IntValidator::negative(-5);
$positive = \Sohuth\Validator\IntValidator::positive(5);

$string = 'izisevran270';
$stringSpace = ' spaceandshit ';
$lengthEqual = \Sohuth\Validator\StringValidator::lengthEqual($string, 5);
$lengthInferior = \Sohuth\Validator\StringValidator::lengthInferior($string, 6);
$lengthSuperior = \Sohuth\Validator\StringValidator::lengthSuperior($string, 4);
$lengthBetween = \Sohuth\Validator\StringValidator::lengthBetween($string, 4, 6);
$noWhiteSpaceBeginningEnd = \Sohuth\Validator\StringValidator::noWhiteSpaceBeginningEnd($stringSpace);
$noWhiteSpace = \Sohuth\Validator\StringValidator::noWhiteSpace($stringSpace);

$isTrue = \Sohuth\Validator\BooleanValidator::isTrue(true);
$isFalse = \Sohuth\Validator\BooleanValidator::isFalse(false);

$array = array('SEVRAN' => '270');
$isEmpty = \Sohuth\Validator\ArrayValidator::isEmpty($array);
$numberElementsEquals = \Sohuth\Validator\ArrayValidator::arrayComparator($array, \Sohuth\Validator\ArrayValidator::LENGTH_EQUAL, 5);
$numberElementsSuperior = \Sohuth\Validator\ArrayValidator::arrayComparator($array, \Sohuth\Validator\ArrayValidator::LENGTH_SUPERIOR, 5);
$numberElementsSuperiorOrEqual = \Sohuth\Validator\ArrayValidator::arrayComparator($array, \Sohuth\Validator\ArrayValidator::LENGTH_SUPERIOR_OR_EQUAL, 5);
$numberElementsInferior = \Sohuth\Validator\ArrayValidator::arrayComparator($array, \Sohuth\Validator\ArrayValidator::LENGTH_INFERIOR, 5);
$numberElementsInferiorOrEqual = \Sohuth\Validator\ArrayValidator::arrayComparator($array, \Sohuth\Validator\ArrayValidator::LENGTH_INFERIOR_OR_EQUAL, 5);
$numberElementsBetween = \Sohuth\Validator\ArrayValidator::numberElementsBetween($array, 5, 10);
$keyExists = \Sohuth\Validator\ArrayValidator::keyExists($array, 'test');
$valueExists = \Sohuth\Validator\ArrayValidator::valueExists($array, '270');

$date = new DateTime('08/07/1994 00:00:00');
$isMajor = \Sohuth\Validator\DateTimeValidator::isMajor($date);
$isYear = \Sohuth\Validator\DateTimeValidator::isYear($date, 14);
$isMonth = \Sohuth\Validator\DateTimeValidator::isMonth($date, 7);
$isDay = \Sohuth\Validator\DateTimeValidator::isDay($date, 8);

var_dump($valueExists);