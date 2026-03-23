<?php
if (isset($_POST['palabras'])) {
    $palabras = $_POST['palabras'];
    $arraypalabras = explode(",", $palabras);
    echo "El número de palabras es: " . count($arraypalabras);
    echo "<br> Las palabras son: <hr>";
    foreach ($arraypalabras as $palabra) {
        echo $palabra . "<hr>";
    }
    echo "Palabras ordenadas alfabeticamente: <hr>";
    sort($arraypalabras);
    foreach ($arraypalabras as $palabra) {
        echo $palabra . "<hr>";
    }
}
