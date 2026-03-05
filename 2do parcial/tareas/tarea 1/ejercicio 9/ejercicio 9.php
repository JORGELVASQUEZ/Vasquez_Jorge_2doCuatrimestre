<?php
if (isset($_GET['frase']) && isset($_GET['palabra'])) {
    $frase = $_GET['frase'];
    $palabra = $_GET['palabra'];

    $contador = substr_count(strtolower($frase), strtolower($palabra));

    $contiene = stripos($frase, $palabra) !== false ? "Sí" : "No";

    $frase_resaltada = str_ireplace($palabra, "<strong>$palabra</strong>", $frase);

    echo "La palabra '$palabra' aparece $contador veces en la frase.<br>";
    echo "¿La frase contiene la palabra buscada? $contiene.<br>";
    echo "Frase con palabras resaltadas: $frase_resaltada";
}