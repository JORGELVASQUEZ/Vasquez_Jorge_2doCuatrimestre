<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['nombre']) && isset($_POST['sexo']) && isset($_POST['peso']) && isset($_POST['altura']) && isset($_POST['edad']) && isset($_POST['actividad'])) {
        $nombre = $_POST['nombre'];
        $sexo = $_POST['sexo'];
        $peso = floatval($_POST['peso']);
        $altura = floatval($_POST['altura']);
        $edad = intval($_POST['edad']);
        $actividad = $_POST['actividad'];

        if ($sexo == "masculino") {
            $tmb = 88.36 + (13.4 * $peso) + (4.8 * $altura) - (5.7 * $edad);
        } else {
            $tmb = 447.6 + (9.2 * $peso) + (3.1 * $altura) - (4.3 * $edad);
        }

        switch ($actividad) {
            case "sedentario":
                $factor = 1.2;
                break;
            case "ligero":
                $factor = 1.375;
                break;
            case "moderado":
                $factor = 1.55;
                break;
            case "activo":
                $factor = 1.725;
                break;
            default:
                $factor = 1.2;
        }

        $calorias_recomendadas = round($tmb * $factor, 2);

        echo "<h2>Resultados para: $nombre</h2>";
        echo "<p>Peso: {$peso} kg</p>";
        echo "<p>Altura: {$altura} cm</p>";
        echo "<p>Edad: {$edad} años</p>";
        echo "<p>TMB (Calorías en reposo por día): {$tmb} calorías</p>";
        echo "<p>Calorías diarias recomendadas según el nivel de actividad: {$calorias_recomendadas} calorías</p>";
    } else {
        echo "<p>Por favor, complete todos los campos del formulario.</p>";
    }
}