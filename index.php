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

$lengthEqual = \Validator\StringV\StringValidator::lengthEqual($string, 5);
$lengthInferior = \Validator\StringV\StringValidator::lengthInferior($string, 6);
$lengthSuperior = \Validator\StringV\StringValidator::lengthSuperior($string, 4);
$lengthBetween = \Validator\StringV\StringValidator::lengthBetween($string, 4, 6);
$noWhiteSpaceBeginningEnd = \Validator\StringV\StringValidator::noWhiteSpaceBeginningEnd($stringBis);
$noWhiteSpace = \Validator\StringV\StringValidator::noWhiteSpace($stringBis);

$isTrue = \Validator\BooleanV\BooleanValidator::isTrue(true);
$isFalse = \Validator\BooleanV\BooleanValidator::isFalse(false);

$isEmpty = \Validator\ArrayV\ArrayValidator::isEmpty($array);
$numberElementsEquals = \Validator\ArrayV\ArrayValidator::numberElementsEquals($array, 10);
$numberElementsSuperior = \Validator\ArrayV\ArrayValidator::numberElementsSuperior($array, 10);
$numberElementsSuperiorOrEqual = \Validator\ArrayV\ArrayValidator::numberElementsSuperiorOrEqual($array, 10);
$numberElementsInferior = \Validator\ArrayV\ArrayValidator::numberElementsInferior($array, 10);
$numberElementsInferiorOrEqual = \Validator\ArrayV\ArrayValidator::numberElementsInferiorOrEqual($array, 10);
$numberElementsBetween = \Validator\ArrayV\ArrayValidator::numberElementsBetween($array, 5, 10);
$keyExists = \Validator\ArrayV\ArrayValidator::keyExists($key);
$valueExists = \Validator\ArrayV\ArrayValidator::valueExists($value);

$isMajor = \Validator\DateTimeV\DateTimeValidator::isMajor($date);
$isYear = \Validator\DateTimeV\DateTimeValidator::isYear($year);

var_dump($isEmpty);