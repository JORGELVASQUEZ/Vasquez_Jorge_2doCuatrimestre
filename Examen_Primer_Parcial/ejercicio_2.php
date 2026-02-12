<?php
$cadena = "la cooperativa hace mala comida";
$vocales = ['a', 'e', 'i', 'o', 'u'];
$contador_de_vocales = 0;
for($i = 0; $i < strlen($cadena); $i++){
    $letra = strtolower($cadena[$i]);
    if(in_array($letra, $vocales)){
        $contador_de_vocales++;
    }
}
echo("<p> la cantidad de vocales en la frase es: $contador_de_vocales </p>");
?>