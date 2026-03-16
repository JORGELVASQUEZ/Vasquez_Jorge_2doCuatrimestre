<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['calificacion1']) && isset($_POST['peso1']) && isset($_POST['calificacion2']) && isset($_POST['peso2']) && isset($_POST['calificacion3']) && isset($_POST['peso3'])) {
        
        $calificacion1 = floatval($_POST['calificacion1']);
        $peso1 = floatval($_POST['peso1']);
        $calificacion2 = floatval($_POST['calificacion2']);
        $peso2 = floatval($_POST['peso2']);
        $calificacion3 = floatval($_POST['calificacion3']);
        $peso3 = floatval($_POST['peso3']);

        if ($peso1 + $peso2 + $peso3 == 100) {
            $aportacion1 = ($calificacion1 * $peso1) / 100;
            $aportacion2 = ($calificacion2 * $peso2) / 100;
            $aportacion3 = ($calificacion3 * $peso3) / 100;

            $promedio_ponderado = $aportacion1 + $aportacion2 + $aportacion3;

            echo "Aportación ponderada Parcial 1: " . number_format($aportacion1, 2) . "<br>";
            echo "Aportación ponderada Parcial 2: " . number_format($aportacion2, 2) . "<br>";
            echo "Aportación ponderada Examen final: " . number_format($aportacion3, 2) . "<br>";
            echo "Promedio ponderado final: " . number_format($promedio_ponderado, 2) . "<br>";

            if ($promedio_ponderado >= 60) {
                echo "El alumno aprobó.<br>";
            } else {
                echo "El alumno reprobó.<br>";
            }

            $evaluaciones = [
                'Parcial 1' => $calificacion1,
                'Parcial 2' => $calificacion2,
                'Examen final' => $calificacion3
            ];
            $max_calificacion = max($evaluaciones);
            $min_calificacion = min($evaluaciones);
            foreach ($evaluaciones as $evaluacion => $calificacion) {
                if ($calificacion == $max_calificacion) {
                    echo "La evaluación con la calificación más alta es: " . $evaluacion . " con " . $calificacion . "<br>";
                }
                if ($calificacion == $min_calificacion) {
                    echo "La evaluación con la calificación más baja es: " . $evaluacion . " con " . $calificacion . "<br>";
                }
            }
        } else {
            echo "La suma de los porcentajes de peso debe ser 100%.";
        }
    } else {
        echo "Por favor, complete todos los campos del formulario.";
    }
}