<?php
if(isset($_GET['nombre']) && isset($_GET['edad']) && isset($_GET['estatura']) && isset($_GET['peso'])){ // Verificar que se hayan enviado los parámetros necesarios
    $nombre = $_GET['nombre'];// Obtener el valor del parámetro 'nombre' enviado por GET
    $edad = $_GET['edad'];// Obtener el valor del parámetro 'edad' enviado por GET
    $estatura = $_GET['estatura'];// Obtener el valor del parámetro 'estatura' enviado por GET
    $peso = $_GET['peso'];// Obtener el valor del parámetro 'peso' enviado por GET
    $imc = round($peso / ($estatura * $estatura), 2);// Calcular el Índice de Masa Corporal (IMC) y redondear a 2 decimales
    // Mostrar los resultados
    if($imc < 18.5){
        echo "<p>Hola $nombre, tu IMC es $imc, lo que indica que estás por debajo de tu peso ideal.</p>";
    } elseif ($imc >= 18.5 && $imc < 25) {
        echo "<p>Hola $nombre, tu IMC es $imc, lo que indica que estás en tu peso ideal.</p>";
    } elseif ($imc >= 25 && $imc < 30) {
        echo "<p>Hola $nombre, tu IMC es $imc, lo que indica que tienes sobrepeso.</p>";
    } else {
        echo "<p>Hola $nombre, tu IMC es $imc, lo que indica que tienes obesidad.</p>";
    }
 
}