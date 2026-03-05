<?php
if (isset($_GET['numero'])) {
    $N = $_GET['numero'];
    if ($N > 0) {
        $sumaTotal = 0;
        $sumaPares = 0;
        $sumaImpares = 0;

        for ($i = 1; $i <= $N; $i++) {
            $sumaTotal += $i;
            if ($i % 2 == 0) {
                $sumaPares += $i;
            } else {
                $sumaImpares += $i;
            }
        }

        echo "La suma de todos los números del 1 al N es: " . $sumaTotal . "<br>";
        echo "La suma de todos los números pares entre 1 y N es: " . $sumaPares . "<br>";
        echo "La suma de todos los números impares entre 1 y N es: " . $sumaImpares . "<br>";
    } else {
        echo "Por favor, ingresa un número entero positivo.";
    }
}
?>