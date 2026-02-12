<?php
$cadena = "PABLITO CLAVO UN CLAVITO PALABRAAAAAAA";
$palabra_mas_larga = "";
$cadena_separada = explode(" ", $cadena);
foreach($cadena_separada as $palabra){
    if(strlen($palabra) > strlen($palabra_mas_larga))
        $palabra_mas_larga = $palabra;
}
echo("<p> la palabra mas larga es: $palabra_mas_larga </p>");
?>