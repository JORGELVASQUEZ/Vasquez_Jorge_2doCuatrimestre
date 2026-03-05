<?php
//verificar que se hayan enviado los parámetros necesarios
if (isset($_GET['Numero_base']) && isset($_GET['Vesces_a_multiplicar'])) {
    $numero_base = $_GET['Numero_base'];
    $veces_a_multiplicar = $_GET['Vesces_a_multiplicar'];

    echo "<h2>Tabla de multiplicar del número $numero_base hasta $veces_a_multiplicar veces:</h2>";
    //con un for, iteramos desde 1 (puede ser incluso 0 pero no se especifica en el enunciado,) hasta el número de veces a multiplicar, y en cada iteración la variable aumenta en 1.
    for($i = 1; $i <= $veces_a_multiplicar; $i++){

        //en cada iteración, se multiplica el número base por el número de iteración actual, y se guarda el resultado en la variable multiplicacion.
        $multiplicacion = $numero_base * $i;

        //se muestra el resultado de la multiplicación en formato "Número base x número de iteración = resultado"
        echo "{$numero_base} * {$i} = {$multiplicacion} <br>";
    }
}
?>