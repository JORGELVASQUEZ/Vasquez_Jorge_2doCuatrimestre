<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operacion'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operacion = $_GET['operacion'];
    switch ($operacion) {
        case 'suma':
            $resultado = $num1 + $num2;
            echo $num1 . " + " . $num2 . " = " . $resultado;
            break;
        case 'resta':
            $resultado = $num1 - $num2;
            echo $num1 . " - " . $num2 . " = " . $resultado;
            break;
        case 'multiplicacion':
            $resultado = $num1 * $num2;
            echo $num1 . " * " . $num2 . " = " . $resultado;
            break;
        case 'divicion':
            if ($num2 > 0) {
                $resultado = $num1 / $num2;
                echo $num1 . " / " . $num2 . " = " . $resultado;
                break;
            } else {
                $resultado = "Error no se puede dividir por cero o un numero negativo";
                echo $resultado;
                break;
            }
        }
    }