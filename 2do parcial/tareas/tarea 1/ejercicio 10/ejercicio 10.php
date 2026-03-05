
<?php
if (isset($_GET['nombre']) && isset($_GET['salario']) && isset($_GET['horas'])) {
    $nombre = $_GET['nombre'];
    $salario_hora = floatval($_GET['salario']);
    $horas_trabajadas = floatval($_GET['horas']);

    $salario_base = min($horas_trabajadas, 40) * $salario_hora;

    $horas_extras = max(0, $horas_trabajadas - 40);
    $pago_horas_extras = $horas_extras * ($salario_hora * 2);

    $total_bruto = $salario_base + $pago_horas_extras;

    $deducciones = $total_bruto * 0.15;

    $salario_neto = $total_bruto - $deducciones;

    echo "Empleado: $nombre<br>";
    echo "Salario base: $" . number_format($salario_base, 2) . "<br>";
    echo "Horas extras: " . number_format($horas_extras, 2) . " horas<br>";
    echo "Pago por horas extras: $" . number_format($pago_horas_extras, 2) . "<br>";
    echo "Total bruto: $" . number_format($total_bruto, 2) . "<br>";
    echo "Deducciones: $" . number_format($deducciones, 2) . "<br>";
    echo "Salario neto: $" . number_format($salario_neto, 2) . "<br>";
}