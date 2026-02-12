<?php
// funciones en php
function saludar($nombre){
    echo "<p>hola, $nombre. ¡Bienvenido a la clase de php!</p>";}
saludar("JORGE");
$nombre_alumno = "MARIA";
saludar($nombre_alumno);// no es necesesario que el argumento sea una cadena literal, puede ser una variable

// funcion que recibe varios parametros
function informacion_personal($nombre, $edad, $ciudad, $estatura, $peso, $profesion){
    $imc = $peso / ($estatura * $estatura);
    echo "<p> Nombre: $nombre <br>";
    echo "Edad: $edad <br>";
    echo "Ciudad: $ciudad <br>";
    echo "Estatura: $estatura m <br>";
    echo "Peso: $peso kg <br>";
    echo "Profesion: $profesion <br>";
    echo "Indice de masa corporal: " . round($imc, 2) . "</p>";
    if ($imc < 18.5) {
        echo "<p>Estado: Bajo peso</p>";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        echo "<p>Estado: Peso normal</p>";
    } elseif ($imc >= 25 && $imc < 29.9) {
        echo "<p>Estado: Sobrepeso</p>";
    } else {
        echo "<p>Estado: Obesidad</p>";
    }
}//bloque de codigo que realiza una tarea especifica, es reutilizable
informacion_personal("jorge", 19, "Mexico", 1.78, 55, "Ingeniero");//llamado a la funcion
informacion_personal("ANA", 25, "Barcelona", 1.60, 90, "Diseñadora");//llamado a la funcion

