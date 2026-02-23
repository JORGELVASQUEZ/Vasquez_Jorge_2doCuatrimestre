<?php
if(isset($_GET['numeros'])){
    $numeros = $_GET['numeros'];
    $array_numero = explode(", ", $numeros);
    $suma = 0;
    foreach($array_numero as $numero){
        $suma += $numero;
    }
    $numero_mayor = max($array_numero);
    $numero_menor = min($array_numero);
    echo "La suma de los números es: " . $suma . "<br>";
    echo "El número mayor es: " . $numero_mayor . "<br>";
    echo "El número menor es: " . $numero_menor . "<br>";
}