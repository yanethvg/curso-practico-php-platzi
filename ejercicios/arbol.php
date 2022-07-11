<?php

$lineas = (int)readline("Escribe  el tamanio del arbol: ");
// echo $lineas;

for ($i=1; $i<=$lineas; $i++){
    for($j=1; $j<$i;$j++){
        echo "*" ;
    }
    echo "\n";
}
