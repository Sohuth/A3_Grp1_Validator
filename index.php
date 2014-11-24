<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 22/11/2014
 * Time: 16:02
 */

require __DIR__.'/vendor/autoload.php';

$equal = \Validator\IntV\IntValidator::equal(10, 10);
$superior = \Validator\IntV\IntValidator::superior(10, 5);
$inferior = \Validator\IntV\IntValidator::inferior(5, 10);
$between = \Validator\IntV\IntValidator::between(5, 0, 10);
$negative = \Validator\IntV\IntValidator::negative(-5);
$positive = \Validator\IntV\IntValidator::positive(5);

$string = 'izisevran270';
$stringSpace = ' spaceandshit ';
$lengthEqual = \Validator\StringV\StringValidator::lengthEqual($string, 5);
$lengthInferior = \Validator\StringV\StringValidator::lengthInferior($string, 6);
$lengthSuperior = \Validator\StringV\StringValidator::lengthSuperior($string, 4);
$lengthBetween = \Validator\StringV\StringValidator::lengthBetween($string, 4, 6);
$noWhiteSpaceBeginningEnd = \Validator\StringV\StringValidator::noWhiteSpaceBeginningEnd($stringSpace);
$noWhiteSpace = \Validator\StringV\StringValidator::noWhiteSpace($stringSpace);

$isTrue = \Validator\BooleanV\BooleanValidator::isTrue(true);
$isFalse = \Validator\BooleanV\BooleanValidator::isFalse(false);

$array = array('SEVRAN' => '270');
$isEmpty = \Validator\ArrayV\ArrayValidator::isEmpty($array);
$numberElementsEquals = \Validator\ArrayV\ArrayValidator::arrayComparator($array, \Validator\ArrayV\ArrayValidator::LENGTH_EQUAL, 5);
$numberElementsSuperior = \Validator\ArrayV\ArrayValidator::arrayComparator($array, \Validator\ArrayV\ArrayValidator::LENGTH_SUPERIOR, 5);
$numberElementsSuperiorOrEqual = \Validator\ArrayV\ArrayValidator::arrayComparator($array, \Validator\ArrayV\ArrayValidator::LENGTH_SUPERIOR_OR_EQUAL, 5);
$numberElementsInferior = \Validator\ArrayV\ArrayValidator::arrayComparator($array, \Validator\ArrayV\ArrayValidator::LENGTH_INFERIOR, 5);
$numberElementsInferiorOrEqual = \Validator\ArrayV\ArrayValidator::arrayComparator($array, \Validator\ArrayV\ArrayValidator::LENGTH_INFERIOR_OR_EQUAL, 5);
$numberElementsBetween = \Validator\ArrayV\ArrayValidator::numberElementsBetween($array, 5, 10);
$keyExists = \Validator\ArrayV\ArrayValidator::keyExists($array, 'test');
$valueExists = \Validator\ArrayV\ArrayValidator::valueExists($array, '270');

$date = new DateTime('08/07/1994 00:00:00');
$isMajor = \Validator\DateTimeV\DateTimeValidator::isMajor($date);
$isYear = \Validator\DateTimeV\DateTimeValidator::isYear($date, 14);
$isMonth = \Validator\DateTimeV\DateTimeValidator::isMonth($date, 7);
$isDay = \Validator\DateTimeV\DateTimeValidator::isDay($date, 8);

var_dump($valueExists);