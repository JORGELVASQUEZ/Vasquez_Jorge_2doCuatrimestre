<?php
if (isset($_GET['articulo']) && isset($_GET['precio']) && isset($_GET['descuento'])) {
    $nombre = $_GET['articulo'];
    $precio = $_GET['precio'];
    $descuento = $_GET['descuento'];

    $montoDescuento = ($precio * $descuento) / 100;
    $precioFinal = $precio - $montoDescuento;

    echo "Artículo: $nombre<br>";
    echo "Precio original: $$precio<br>";
    echo "Monto del descuento: $$montoDescuento<br>";
    echo "Precio final con descuento aplicado: $$precioFinal<br>";

    if ($descuento < 10) {
        echo "Descuento: Bajo";
    } elseif ($descuento >= 10 && $descuento <= 30) {
        echo "Descuento: Moderado";
    } else {
        echo "Descuento: Alto";
    }
}
?>