# SohuthValidator

[![Build Status](https://travis-ci.org/Sohuth/A3_Grp1_Validator.svg?branch=master)](https://travis-ci.org/Sohuth/A3_Grp1_Validator)

[![Code Coverage](https://scrutinizer-ci.com/g/Sohuth/A3_Grp1_Validator/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Sohuth/A3_Grp1_Validator/?branch=master)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Sohuth/A3_Grp1_Validator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Sohuth/A3_Grp1_Validator/?branch=master)

## Installation

### Clone repository

git clone ...

###Install dependencies
In Git Bash or any CMD:

composer update --prefer-dist -o

or

composer update

###???profit

## Code Example

In the index.php file, enter the values you need to test then do a var_dump(); of the method you want.

Example:

$valueExists = \Sohuth\Validator\ArrayValidator::valueExists($array, '270');
var_dump($valueExists);

It will return : boolean true.

## Copyright and license

Code and documentation by Sohuth. This library is OpenSource.