<?php

    // print_r($_REQUEST);

    $palabras= array("Sol", "Dia", "Hola", "Alma", "Miel");

    for ($i=0; $i < count($palabras); $i++) { 
        if (strtolower($_REQUEST["valorPosicion".$i]) == strtolower( $palabras[$i])) {
            echo "La Palabra ingresada es correcta $i, su respuesta fue ".$_REQUEST["valorPosicion".$i];
        }else{
            echo "Lo siento el valor colocado es incorrecta, la respuesta correcta es: $palabras[$i] ";
        }
        echo "<br>";
    }

?>