<?php

$lineas = (int)readline("Escribe  el tamanio del arbol: ");
// echo $lineas;

for ($i=$lineas; $i>=0; $i--){
    for($j=0; $j<$i;$j++){
        echo "*" ;
    }
    echo "\n";
}
