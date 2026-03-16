<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["litros"]) && isset($_POST["precio_litro"]) && isset($_POST["kilometros"]) && isset($_POST["presupuesto_extra"])){
        $litros = floatval($_POST["litros"]);
        $precio_por_litro = floatval($_POST["precio_litro"]);
        $kilometros = floatval($_POST["kilometros"]);
        $presupuesto_adicional = floatval($_POST["presupuesto_extra"]); 
        $costo_total = $litros * $precio_por_litro;
        $rendimiento = $kilometros / $litros;
        $costo_por_kilometro = $costo_total / $kilometros;
        $litros_adicionales = $presupuesto_adicional / $precio_por_litro;
        $kilometros_adicionales = $litros_adicionales * $rendimiento;

        echo("<p> Costo total de la carga actual: " . number_format($costo_total, 2) . " pesos.</p>");
        echo("<p> Rendimiento del vehículo: " . number_format($rendimiento, 2) . " km/litro.</p>");
        echo("<p> Costo por kilómetro recorrido: " . number_format($costo_por_kilometro, 2) . " pesos/km.</p>");
        echo("<p> Litros adicionales que se pueden comprar con el presupuesto extra: " . number_format($litros_adicionales, 2) . " litros.</p>");
        echo("<p> Kilómetros adicionales que podría recorrer: " . number_format($kilometros_adicionales, 2) . " km.</p>");
    } else {
        echo("<p> Por favor, completa todos los campos del formulario.</p>");
    }
}