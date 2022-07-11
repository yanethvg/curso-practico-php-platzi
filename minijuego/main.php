<?php

$palabras= array("Sol", "Dia", "Hola", "Alma", "Miel");
$palabrasDesordenadas = array();

$formulario = "<form action='validar.php'>";
$cajaDeTexto = "";
//Desordenar las palabras
for ($i=0; $i < count($palabras); $i++) { 
    $palabrasDesordenadas[$i] = str_shuffle($palabras[$i]);
    $cajaDeTexto .=  "<label>Escribe la palabra correcta de  ".$palabrasDesordenadas[$i]." esta posición es $i</label>
    <input type='text' name='valorPosicion".$i."'><br>";
}
$botonEnviar = "<button type='submit'>Enviar</button>";
$finalFormulario = "</form>";

// print_r($palabrasDesordenadas);
echo $formulario.$cajaDeTexto.$botonEnviar.$finalFormulario;



?>