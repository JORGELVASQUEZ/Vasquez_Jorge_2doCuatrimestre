<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];

    if ($num1 == $num2 || $num1 == $num3 || $num2 == $num3) {
        echo "Dos o más números son iguales.";
    } else {
        $mayor = max($num1, $num2, $num3);
        $menor = min($num1, $num2, $num3);
        $medio = ($num1 + $num2 + $num3) - ($mayor + $menor);

        echo "Número mayor: " . $mayor . "<br>";
        echo "Número menor: " . $menor . "<br>";
        echo "Número en el rango medio: " . $medio;
    }
}
?>