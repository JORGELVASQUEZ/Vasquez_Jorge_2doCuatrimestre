<?php
 // clase 04

 // manejo de cadenas
    $cadena = "Esto es una cadena de texto";
    $cadena2 = 'Esto es otra cadena de texto';

//cocatenacion de cadenas
$cadena_concatenada = $cadena . " " . $cadena2;
echo("<p> cadena concatenada: $cadena_concatenada </p> <br>");

// longitud de una cadena
$longitud_cadena = strlen($cadena);// strlen() devuelve la longitud de una cadena, es decir el número de caracteres que contiene, incluye los espacios y caracteres especiales.
$longitud_cadena2 = strlen($cadena2);
echo("<p> longitud de la cadena 1: $longitud_cadena. <br> longitud de la cadena 2: $longitud_cadena2. </p> <br>");

//covertir una cadena a mayusculas
$cadena1_mayusculas = strtoupper($cadena); // strtoupper() convierte todos los caracteres de una cadena a mayúsculas.
echo("<p> cadena1 original: $cadena.<br> cadena convertida a mayusculas: $cadena1_mayusculas </p> <br>");

//convertir una cadena a minusculas
$cadena2_minusculas = strtolower($cadena2); // strtolower() convierte todos los caracteres de una cadena a minúsculas.
echo("<p> cadena2 original: $cadena2.<br> cadena convertida a minusculas: $cadena2_minusculas </p> <br>");

//convertir una cadena en arreglo de palabras
$nombres = "juan, mario, enrique, pablo, lucas, martha, fernanda";
echo("<p> cadena de nombres: $nombres </p> <br>");
$arreglo_nombres = explode(", ", $nombres); // explode() la funcion explode() divide una cadena en un arreglo utilizando un delimitador especificado.
echo("<p> arreglo de nombres: </p>");
print_r($arreglo_nombres);
foreach($arreglo_nombres as $nombre){
    echo("<li> - $nombre </li>");
}

$frutas = "manzana pera uva naranja sandia melon cereza";
$arreglo_frutas = explode(" ", $frutas);
echo("<p> cadena de frutas: $frutas </p> <br>");
echo("<p> arreglo de frutas: </p>");
print_r($arreglo_frutas);
foreach($arreglo_frutas as $fruta){
    echo("<li> - $fruta </li>");
}

// convertir un arreglo en una cadena
$arreglo_colores = array("rojo", "cafe", "azul", "verde", "amarillo", "naranja", "morado", "rosado");
$cadena_colores = implode(", ", $arreglo_colores); // implode() la funcion implode() une los elementos de un arreglo en una sola cadena utilizando un delimitador especificado.
echo("<p> arreglo de colores: </p>");
print_r($arreglo_colores);
echo("<p> cadena de colores: $cadena_colores </p> <br>");

//otras funciones para manejo de cadenas en php
$frase = " El aprendisaje de PHP es muy divertido y util, PHP es un lenguaje de programacion muy popular, PHP es usado en el desarrollo web ";
str_word_count($frase); // str_word_count() cuenta el número de palabras en una cadena.
echo("<p> el numero de palabras en la frase es: " . str_word_count($frase) . " </p> <br>");
strrev($frase); // strrev() invierte una cadena.
echo("<p> la frase invertida es: '" . strrev($frase) . "' </p> <br>");
trim($frase); // trim() elimina los espacios en blanco (u otros caracteres) al inicio y al final de una cadena.
echo("<p> la longitud de la frase sin espacios al inicio y al final es: " . strlen(trim($frase)) . " </p> <br>");
$arreglo_caracteres = str_split($frase); // str_split() convierte una cadena en un arreglo de caracteres.
echo("<p> arreglo de caracteres de la frase: </p>");
print_r($arreglo_caracteres);
foreach($arreglo_caracteres as $caracter){
    echo("<li> - '$caracter' </li>");
}
str_shuffle($frase); // str_shuffle() mezcla aleatoriamente los caracteres de una cadena.
echo("<p> la frase con los caracteres mezclados es: '" . str_shuffle($frase) . "' </p> <br>");
strpos($frase, "PHP"); // strpos() busca la posición de la primera aparición de una subcadena en una cadena.
echo("<p> frase original: '$frase' </p> <br>");
$sub_cadena = "php";
$posicion_sub_cadena = strpos($frase, $sub_cadena); // strpos() busca la posición de la primera aparición de una subcadena en una cadena.
echo("<p> la subcadena '$sub_cadena' se encuentra en la posicion: $posicion_sub_cadena </p> <br>");
$frase_reemplazada = str_replace("PHP", "PYTHON", $frase); // str_replace() reemplaza todas las apariciones de una subcadena por otra en una cadena.
//nota : str_ireplace() es similar a str_replace() pero no distingue entre mayúsculas y minúsculas, por ende al querer convertir "php" a "python" tambien lo haria sin importar si es mayuscula o minuscula.

echo("<p> frase con reemplazo: '$frase_reemplazada' </p> <br>");
$frase_recortada = trim($frase); // trim() elimina los espacios en blanco (u otros caracteres) al inicio y al final de una cadena.
echo("<p> frase recortada: '$frase_recortada' </p> <br>");
$primer_caracter = $frase[0]; // acceder a un caracter especifico en una cadena
echo("<p> el primer caracter de la frase es: '$primer_caracter' </p> <br>");
$ultimo_caracter = $frase[strlen($frase) - 1];
echo("<p> el ultimo caracter de la frase es: '$ultimo_caracter' </p> <br>");

//manejo de errores en php 
// comparativa con python
try {
    $numero1 = 20;
    $numero2 = 0;
    $resultado = $numero1 / $numero2;
    echo("<p> el resultado de la division es: $resultado </p> <br>");
} catch (DivisionByZeroError $e) {
    echo("<p> error: division por cero no es permitida. </p> <br>");
} finally {
    echo("<p> operacion finalizada. </p> <br>");
}
echo("<p> programa continua ejecutandose normalmente. </p> <br>");

// tipos de errores en php
// divisionByZeroError: ocurre cuando se intenta dividir un número por cero.
// parseError: ocurre cuando hay un error de sintaxis en el código PHP.
// typeError: ocurre cuando se pasa un argumento de un tipo incorrecto a una función o método.
// exeption: es la clase base para todas las excepciones en PHP.
// notice: son advertencias que indican que algo podría estar mal en el código, pero no detienen la ejecución del programa. 
// warning: son advertencias más graves que los notices, pero tampoco detienen la ejecución del programa.
// fatalError: son errores graves que detienen la ejecución del programa inmediatamente.
// undefinedVariable: ocurre cuando se intenta acceder a una variable que no ha sido definida.
// indexOutOfBounds: ocurre cuando se intenta acceder a un índice que está fuera del rango válido de un arreglo.
// memoryLimitExceeded: ocurre cuando un script intenta usar más memoria de la que tiene asignada.
// fileNotFound: ocurre cuando se intenta incluir o requerir un archivo que no existe.
// databaseConnectionError: ocurre cuando hay un problema al intentar conectarse a una base de datos.
// notice y warning no se pueden capturar con try catch, pero los demas si.