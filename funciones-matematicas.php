<?php

// La funcion max() nos da el valor mas grande de un array
echo max(10, 20, 2, 34, 100);

// Nos da el valor menor
echo min(10, 2, 3, 50);

$numeroRandom = rand(10, 100);
echo "\nTu numero Random es: ". $numeroRandom . "\n";

// empty verifica si una variable tiene valor o esta vacio
$numero = "";
var_dump(empty($numero)); // Nos dice true porque la variable $numero no tiene valor

$longitud = "Victor Adrian";
echo strlen($longitud) . "\n";

$raizCuadrada = sqrt(100);
echo $raizCuadrada . "\n";
?>