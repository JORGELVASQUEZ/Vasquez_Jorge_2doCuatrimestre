<?php
echo("<p> 1.- Haz un programa que declare una cadena y la muestre en mayúsculas.</p> <br>");
$cadena = "pablito clabo un clavito en la calva de un calvito.";
$cadena_mayusculas = strtoupper($cadena);
echo("<p> Cadena original: $cadena. <br> Cadena en mayúsculas: $cadena_mayusculas. </p> <br>");
echo("<p>--------------------------------------------------------------------------------------------------------------------</p> <br>");

echo("<p> 2.- Haz un programa que declare un arreglo de edades y muestre la edad mayor.</p> <br>");
$edades = [12, 18, 20, 15, 22, 18, 60, 33];
$edad_mayor = max($edades);
echo("<p> Arreglo de edades: " . implode(", ", $edades) . ". <br> Edad mayor: $edad_mayor. </p> <br>");
echo("<p>--------------------------------------------------------------------------------------------------------------------</p> <br>");

echo("<p> 3.- Haz un programa que declare un arreglo de palabras y muestre solo las que tienen más de 5 letras.</p> <br>");
$palabras = ["martillo", "cilindro", "gato", "sal", "coche", "uva", "plato"];
echo("<p> Arreglo de palabras: " . implode(", ", $palabras) . ".</p>");
$palabra_mas_5 = [];
foreach($palabras as $palabra){
    if(strlen($palabra) > 5){
        array_push($palabra_mas_5, $palabra);
    }
}
echo("<p> Palabras con más de 5 letras: " . implode(", ", $palabra_mas_5) . ".</p> <br>");
echo("<p>--------------------------------------------------------------------------------------------------------------------</p> <br>");

echo("<p> 4.- Haz un programa que declare una cadena y muestre cuántas veces aparece cada letra.</p> <br>");
$cadena2 = "programacion en php es muy divertido y util";
echo("<p> Cadena: $cadena2.</p>");
$letras_contador = [];
$cadena2_sin_espacios = str_replace(" ", "", $cadena2);
for($i = 0; $i < strlen($cadena2_sin_espacios); $i++){
    $letra = $cadena2_sin_espacios[$i];
    if(array_key_exists($letra, $letras_contador)){
        $letras_contador[$letra]++;
    } else {
        $letras_contador[$letra] = 1;
    }
}
echo("<p> Conteo de letras: </p>");
foreach($letras_contador as $letra => $cantidad){
    echo("<p> Letra '$letra': $cantidad veces.</p>");
}
echo("<p>--------------------------------------------------------------------------------------------------------------------</p> <br>");

echo("<p> 5.- Haz un programa que declare un arreglo de números y separe pares e impares en dos arreglos nuevos.</p> <br>");
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo("<p> Arreglo de números: " . implode(", ", $numeros) . ".</p>");
$pares = [];
$impares = [];
foreach($numeros as $numero){
    if($numero % 2 == 0){
        array_push($pares, $numero);
    } else {
        array_push($impares, $numero);
    }
}
echo("<p> Números pares: " . implode(", ", $pares) . ".</p>");
echo("<p> Números impares: " . implode(", ", $impares) . ".</p> <br>");
echo("<p>--------------------------------------------------------------------------------------------------------------------</p> <br>");

echo("<p> 6.- Haz un programa que declare una cadena y cuente cuántas vocales tiene.</p> <br>");
$cadena3 = "El aprendizaje de PHP es muy divertido y util";
echo("<p> Cadena: $cadena3.</p>");
$vocales = ['a', 'e', 'i', 'o', 'u'];
$contador_vocales = 0;
for($i = 0; $i < strlen($cadena3); $i++){
    $letra = strtolower($cadena3[$i]);
    if(in_array($letra, $vocales)){
        $contador_vocales++;
    }
}
echo("<p> Cantidad de vocales: $contador_vocales.</p> <br>");
echo("<p>--------------------------------------------------------------------------------------------------------------------</p> <br>");

echo("<p> 7.- Haz un programa que declare un arreglo asociativo con producto y cantidad y muestre los que están bajos (<5).</p> <br>");
echo("<p> Arreglo asociativo de productos y cantidades: </p>");
echo("<p> manzanas: 10, naranjas: 3, platanos: 7, uvas: 2, peras: 8.</p>");
$productos = [
    "manzanas" => 10,
    "naranjas" => 3,
    "platanos" => 7,
    "uvas" => 2,
    "peras" => 8
];
echo("<p> Productos con cantidad baja (<5): </p>");
foreach($productos as $producto => $cantidad){
    if($cantidad < 5){
        echo("<p> Producto: $producto, Cantidad: $cantidad.</p>");
    }
}
echo("<p>--------------------------------------------------------------------------------------------------------------------</p> <br>");

echo("<p> 8.- Haz un programa que declare una frase y reemplace una palabra por otra.</p> <br>");
$frase = "El aprendizaje de PHP es muy divertido y util. Aprender PHP es una gran experiencia.";
$frase_reemplazada = str_replace("PHP", "Python", $frase);
echo("<p> Frase original: $frase. <br> Frase con palabra reemplazada: $frase_reemplazada. </p> <br>");
echo("<p>--------------------------------------------------------------------------------------------------------------------</p> <br>");

echo("<p> 9.- Haz un programa que declare un arreglo asociativo de alumnos, donde cada alumno tenga varias calificaciones, y calcule el promedio de cada uno.</p> <br>");
echo("<p> Arreglo asociativo de alumnos y calificaciones: </p>");
echo("<p> Juan: [85, 90, 78], Ana: [92, 88, 95], Luis: [70, 75, 80].</p>");
$alumnos = [
    "Juan" => [85, 90, 78],
    "Ana" => [92, 88, 95],
    "Luis" => [70, 75, 80]
];

foreach($alumnos as $alumno => $calificaciones){
    $promedio = array_sum($calificaciones) / count($calificaciones);
    echo("<p> Alumno: $alumno, Promedio: $promedio.</p>");
}
echo("<p>--------------------------------------------------------------------------------------------------------------------</p> <br>");

echo("<p> 10.- Haz un programa que declare un arreglo de nombres y muestre los que empiezan con vocal.</p> <br>");
$nombres2 = ["Carlos", "Ana", "Enrique", "Luisa", "Oscar", "Marta"];
echo("<p> Arreglo de nombres: " . implode(", ", $nombres2) . ".</p>");
$vocales_iniciales = ['A', 'E', 'I', 'O', 'U'];
echo("<p> Nombres que empiezan con vocal: </p>");
foreach($nombres2 as $nombre){
    $primera_letra = strtoupper($nombre[0]);
    if(in_array($primera_letra, $vocales_iniciales)){
        echo("<p> Nombre: $nombre.</p>");
    }
}
echo("<p>--------------------------------------------------------------------------------------------------------------------</p> <br>");