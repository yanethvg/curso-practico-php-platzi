<?php 
  $valorA = true;
  $valorB = true;

   // si dejamos lo siguiente sera true
    $resultado = $valorA && $valorB;
   // aca dara false porque no se asigna primero por la precedencia
  $resultado = ($valorA and $valorB);
  //nos indicara el tipo de dato
  var_dump($resultado);
?>

