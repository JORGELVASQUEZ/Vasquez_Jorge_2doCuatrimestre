<?php
$productos = [
    "leche" => 20,
    "galletas" => 17,
    "pan" => 6,
    "cafe" => 30
];
$total = 0;
echo("<p> precio de los productos: </p>");
echo("<p>$". implode(", $", $productos). "</p>");
foreach($productos as $producto => $cantidad){
    $total += $cantidad;
}
echo("<p> Precio total de productos: $$total.</p>");
?>