<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["numero"]) && is_numeric($_POST["numero"])) {
        $N = intval($_POST["numero"]);
        if ($N >= 1 && $N <= 10) {
            for ($i = 1; $i <= $N; $i++) {
                $numAsteriscos = 2 * $i - 1;
                $numEspacios = $N - $i;
                echo "<pre>" . str_repeat(" ", $numEspacios) . str_repeat("*", $numAsteriscos) . "</pre>";
            }
            $totalAsteriscos = pow($N, 2);
            echo "Número total de asteriscos: " . $totalAsteriscos;
        } else {
            echo "Por favor, ingresa un número entre 1 y 10.";
        }
    } else {
        echo "Por favor, ingresa un número entero.";
    }
}