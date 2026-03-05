<?php
if(isset($_GET['monto']) && isset($_GET['propina'])){
    $monto = $_GET['monto'];
    $propina = $_GET['propina'];
    $propina_total = $monto * ($propina / 100);
    $total = $monto + $propina_total;
    echo "Monto de la propina: $propina_total<br>";
    echo "Monto total a pagar: $total";
}