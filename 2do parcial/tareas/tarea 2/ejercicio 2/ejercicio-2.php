<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["texto"])) {
        $texto = $_POST["texto"];
        
        $palabras = str_word_count($texto);
        echo "<h2>a. Número total de palabras: " . $palabras . "</h2>";
        
        $oraciones = substr_count($texto, ".");
        echo "<h2>b. Número de oraciones: " . $oraciones . "</h2>";
        
        $palabrasArray = explode(" ", $texto);
        $palabraMasLarga = "";
        foreach ($palabrasArray as $palabra) {
            if (strlen($palabra) > strlen($palabraMasLarga)) {
                $palabraMasLarga = $palabra;
            }
        }
        echo "<h2>c. La palabra más larga: " . $palabraMasLarga . "</h2>";
        
        $totalCaracteres = strlen(str_replace(" ", "", $texto));
        $promedioCaracteres = round($totalCaracteres / $palabras, 2);
        echo "<h2>d. Promedio de caracteres por palabra: " . $promedioCaracteres . "</h2>";
    }
}