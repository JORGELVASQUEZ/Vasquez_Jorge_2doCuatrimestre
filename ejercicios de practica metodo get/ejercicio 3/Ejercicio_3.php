<?php
//Ejercicio 3: Crea un programa que solicite al usuario ingresar una palabra o frase. Posteriormente, cuenta el número de caracteres que tiene la palabra o frase ingresada (incluyendo espacios) y el numero de vocales que tiene (sin importar si son mayusculas o minusculas). Muestra el resultado al usuario
if(isset($_GET['Frase_o_palabra'])){
    $frase_o_palabra = $_GET['Frase_o_palabra'];
    $longitud_frase_o_palabra = strlen($frase_o_palabra);
    $vocales = array('a', 'e', 'i', 'o', 'u');
    $contador_vocales = 0;
    for($i = 0; $i < strlen($frase_o_palabra); $i++){
        if(in_array(strtolower($frase_o_palabra[$i]), $vocales)){
            $contador_vocales++;
        }
    }
    echo("<p> la frase o palabra ingresada es: '$frase_o_palabra'. <br> la longitud de la frase o palabra es: $longitud_frase_o_palabra. <br> el numero de vocales en la frase o palabra es: $contador_vocales. </p>");
}