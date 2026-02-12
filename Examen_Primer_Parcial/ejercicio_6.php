<?php
$numeros = [2, 3, 7, 6, 8, 5, 4, 2, 6];
$numeros_ordenados = [];
foreach($numeros as $numero){
    $posicion = 0;
    while($posicion < count($numeros_ordenados) && $numero > $numeros_ordenados[$posicion]){
        $posicion++;
    }
    array_splice($numeros_ordenados, $posicion, 0, $numero);
}
echo("<p> numeros desordenados: " . implode(", ", $numeros) . "</p>");
echo("<p> Numeros ordenados: " . implode(", ", $numeros_ordenados) . "</p>");
?>