<?php
$calificaciones = [7, 7, 9, 6, 8];
echo("<p> Calificaciones: " .implode(", ", $calificaciones). "</p>");
$promedio = array_sum($calificaciones) / count($calificaciones);
echo("<p> el promedio de las calificaciones es: $promedio </p>");
?>
