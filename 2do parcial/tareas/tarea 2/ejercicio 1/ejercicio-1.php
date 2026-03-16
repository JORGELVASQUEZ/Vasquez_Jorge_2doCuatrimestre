<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $palabra = $_POST["palabra"];
        echo "<h2>a. La palabra o frase original: " . $palabra . "</h2>";

        $palabraInvertida = strrev($palabra);
        echo "<h2>b. La palabra o frase invertida: " . $palabraInvertida . "</h2>";

        $palabraSinEspacios = str_replace(" ", "", strtolower($palabra));
        $palabraInvertidaSinEspacios = str_replace(" ", "", strtolower($palabraInvertida));

        if ($palabraSinEspacios == $palabraInvertidaSinEspacios) {
            echo "<h2>c. Es un palíndromo.</h2>";
        } else {
            echo "<h2>c. No es un palíndromo.</h2>";
        }
    }