<?php
$numeros = [ 2, 10, 15, 7, 9, 5, 4, 3, 57];
$pares = [];
$impares =[];
foreach($numeros as $numero){
    if ($numero % 2 == 0){
        array_push($pares, $numero);
    } else {
        array_push($impares, $numero);
    }
}
echo("<p> Numeros pares: " . implode(", ", $pares)."</p>");
echo("<p> Numeros impares: " . implode(", ", $impares). "</p>");
?>
