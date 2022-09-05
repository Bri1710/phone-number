<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class PhoneNumber
{
    public function createPhoneNumber(array $numbersGiven): string
    {
        $count = count($numbersGiven);
        if (isset($count) == 10) {
            $implodeNumbers = implode($numbersGiven);
            $stringConvert = strval($implodeNumbers);
            $string = str_split($stringConvert);
            return ("(" . $string[0] . $string[1] . $string[2] . ") " . $string[3] . $string[4] . $string[5] . "-" . $string[6] . $string[7] . $string[8] . $string[9]);
        }
        return "";


    }
}
$phoneClassObject = new PhoneNumber();
$phoneClassObject->createPhoneNumber([1, 7, 3, 4, 5, 6, 7, 8, 9, 0]);
