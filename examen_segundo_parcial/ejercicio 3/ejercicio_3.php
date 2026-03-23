<?php
if (isset($_GET['anio'])) {
    $anio = intval($_GET['anio']);
    if ($anio % 4 == 0 && ($anio % 100 != 0 || $anio % 400 == 0)) {
        echo "$anio es un año bisiesto.";
    } else { 
        echo "$anio no es un año bisiesto.";
    } 
}
