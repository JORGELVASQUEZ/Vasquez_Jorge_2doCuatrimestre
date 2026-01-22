<?php
//Ejercicio 1: haz un programa que reciba una cadena (ya definida en el codigo), y devuelve la misma cadena pero con palabras en orden inverso. maneja los posibles errores.

try{
    $cadena_ej1 = "El aprendizaje de PHP es muy divertido y util";
    strrev($cadena_ej1);
    $palabras = explode(" ", $cadena_ej1);
    $palabras_invertidas = array_reverse($palabras);
    $cadena_invertida = implode(" ", $palabras_invertidas);
    echo("<p> cadena original: $cadena_ej1. <br> cadena con palabras en orden inverso: $cadena_invertida. </p> <br>");
} catch (typeError $e){
    echo "Error de tipo:";
} finally {
    echo("<p> Ejercicio 1 finalizado. </p> <br>");
}
//Ejercicio 2: Haz un programa que reciba una cadena de texto que contenga una lista de numeros separados por comas (ya definida en el codigo), y devuelve la suma de esos numeros. maneja los posibles errores.
try{
    $cadena_ej2 = "10,20,30,40,50";
    $numeros = explode(",", $cadena_ej2);
    $suma = 0;
    foreach($numeros as $numero){
        $suma += (int)$numero;
    }
    echo("<p> cadena de numeros: $cadena_ej2. <br> suma de los numeros: $suma. </p> <br>");
} catch (typeError $e){
    echo "Error de tipo:";
} finally {
    echo("<p> Ejercicio 2 finalizado. </p> <br>");
}


//Ejercicio 3: Haz un programa que reciba una cadena de texto (ya definida en el codigo), y cuente cuantas veces aparece una subcadena especifica dentro de esa cadena. maneja los posibles errores.
try{
    $cadena_ej3 = "PHP es un lenguaje de programacion muy popular. PHP es usado en el desarrollo web. Aprender PHP es divertido.";
    $subcadena = "PHP";
    $contador = substr_count($cadena_ej3, $subcadena);
    echo("<p> cadena original: $cadena_ej3. <br> la subcadena '$subcadena' aparece $contador veces en la cadena. </p> <br>");
} catch (typeError $e){
    echo "Error de tipo:";
} finally {
    echo("<p> Ejercicio 3 finalizado. </p> <br>");
}