<?php

$name = 'Camila';
$lastName ='Rojas';

function concatenar($name, $lastName)
{
    $fullName = $name . ' ' . $lastName;
    return $fullName;
}

echo concatenar($name, $lastName) . "\n";

function sumNumbers($numbersArray)
{
    $sum = 0;
    $arrayLength = count($numbersArray);
    for($i=0; $i<$arrayLength; $i++){
        $sum = $sum + $numbersArray[$i];
    }
    return $sum;
}

$numbersArray = [1,2,7,5,4]; //array(1,2,7,5,4)
echo "La suma de los valores del array es: "
. sumNumbers($numbersArray) . "\n";
