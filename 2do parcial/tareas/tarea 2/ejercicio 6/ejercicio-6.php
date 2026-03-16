<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["monto"]) && isset($_POST["tipo_cambio_usd"]) && isset($_POST["tipo_cambio_eur"])){
        $monto = floatval($_POST["monto"]);
        $tipo_cambio_usd = floatval($_POST["tipo_cambio_usd"]);
        $tipo_cambio_eur = floatval($_POST["tipo_cambio_eur"]);

        $equivalente_usd = $monto / $tipo_cambio_usd;
        $equivalente_eur = $monto / $tipo_cambio_eur;

        echo("<p> Monto original en pesos: $monto MXN.</p>");
        echo("<p> Equivalente en dólares: " . number_format($equivalente_usd, 2) . " USD.</p>");
        echo("<p> Equivalente en euros: " . number_format($equivalente_eur, 2) . " EUR.</p>");

        $unidades_usd_con_100_pesos = 100 / $tipo_cambio_usd;
        $unidades_eur_con_100_pesos = 100 / $tipo_cambio_eur;

        echo("<p> Unidades de dólares con 100 pesos: " . number_format($unidades_usd_con_100_pesos, 2) . " USD.</p>");
        echo("<p> Unidades de euros con 100 pesos: " . number_format($unidades_eur_con_100_pesos, 2) . " EUR.</p>");
    } else {
        echo("<p> Por favor, completa todos los campos del formulario.</p>");
    }
}