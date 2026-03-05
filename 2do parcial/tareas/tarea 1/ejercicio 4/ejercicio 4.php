<?php
if(isset($_GET['nombres'])){ 
    $nombres = explode(',', $_GET['nombres']);
    echo "Nombres ingresados:<br>";
    foreach ($nombres as $nombre) {
        echo $nombre . "<br>";
    }
    echo "Total de nombres ingresados: " . count($nombres) . "<br>";
    sort($nombres);
    echo "Nombres ordenados alfabéticamente:<br>";
    foreach ($nombres as $nombre) {
        echo $nombre . "<br>";
    }
    $nombresUnicos = array_unique($nombres);
    if (count($nombres) != count($nombresUnicos)) {
        echo "Hay nombres duplicados.<br>";
    } else {
        echo "No hay nombres duplicados.<br>";
    }
}