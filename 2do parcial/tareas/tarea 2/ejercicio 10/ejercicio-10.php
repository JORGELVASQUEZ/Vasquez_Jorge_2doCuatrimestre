<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["tarjeta"])){
        $tarjeta = $_POST["tarjeta"];
        if(strlen($tarjeta) == 16 && ctype_digit($tarjeta)){
            $formateado = substr($tarjeta, 0, 4) . " " . substr($tarjeta, 4, 4) . " " . substr($tarjeta, 8, 4) . " " . substr($tarjeta, 12, 4);
            $enmascarado = "**** **** **** " . substr($tarjeta, 12, 4);
            echo("<p> Número de tarjeta formateado: $formateado.</p>");
            echo("<p> Número de tarjeta enmascarado: $enmascarado.</p>");
        } else {
            echo("<p> El número de tarjeta debe tener exactamente 16 dígitos numéricos.</p>");
        }
    }
}