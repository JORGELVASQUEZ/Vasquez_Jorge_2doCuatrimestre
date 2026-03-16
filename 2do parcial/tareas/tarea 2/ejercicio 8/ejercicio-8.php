<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["base"]) && isset($_POST["exponente"])){
        $base = intval($_POST["base"]);
        $exponente_max = intval($_POST["exponente"]);
        if($exponente_max >= 1 && $exponente_max <= 10){
            echo("<p>Tabla de potencias para la base $base:</p>");
            $suma_potencias = 0;
            for($i = 1; $i <= $exponente_max; $i++){
                $potencia = pow($base, $i);
                $suma_potencias += $potencia;
                $paridad = ($potencia % 2 == 0) ? "par" : "impar";
                echo("<p>$base^$i = $potencia ($paridad)</p>");
            }
            echo("<p>Suma de todas las potencias: $suma_potencias</p>");
        } else {
            echo("<p>El exponente máximo debe ser un número entre 1 y 10.</p>");
        }
    } else {
        echo("<p>Por favor, ingresa ambos campos: base y exponente máximo.</p>");
    }
}