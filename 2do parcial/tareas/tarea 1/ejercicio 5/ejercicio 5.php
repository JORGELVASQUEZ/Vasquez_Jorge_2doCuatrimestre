<?php
if (isset($_GET['numeros'])) {
    $numeros = explode(',', $_GET['numeros']);
    $positivos = [];
    $negativos = [];
    $ceros = [];
    $pares = [];
    $impares = [];

    foreach ($numeros as $numero) {
        $numero = trim($numero);
        if (is_numeric($numero)) {
            if ($numero > 0) {
                $positivos[] = $numero;
            } elseif ($numero < 0) {
                $negativos[] = $numero;
            } else {
                $ceros[] = $numero;
            }

            if ($numero % 2 == 0) {
                $pares[] = $numero;
            } else {
                $impares[] = $numero;
            }
        }
    }

    echo "<hr>";
    echo "Números positivos: " . implode(', ', $positivos) . " (Conteo: " . count($positivos) . ")";
    if (empty($positivos)) {
        echo " - No hay números positivos.";
    }

    echo "<hr>";
    echo "Números negativos: " . implode(', ', $negativos) . " (Conteo: " . count($negativos) . ")";
    if (empty($negativos)) {
        echo " - No hay números negativos.";
    }

    echo "<hr>";
    echo "Ceros: " . implode(', ', $ceros) . " (Conteo: " . count($ceros) . ")";
    if (empty($ceros)) {
        echo " - No hay ceros.";
    }

    echo "<hr>";
    echo "Números pares: " . implode(', ', $pares) . " (Conteo: " . count($pares) . ")";
    if (empty($pares)) {
        echo " - No hay números pares.";
    }

    echo "<hr>";
    echo "Números impares: " . implode(', ', $impares) . " (Conteo: " . count($impares) . ")";
    if (empty($impares)) {
        echo " - No hay números impares.";
    }
}