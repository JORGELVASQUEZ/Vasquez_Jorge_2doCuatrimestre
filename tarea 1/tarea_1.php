<?php

echo "1.- Haz un programa que almacene el total de ventas de un día en una variable y muestre un mensaje indicando si fue un buen día de ventas cuando el monto sea mayor o igual a $5,000, o ventas bajas en caso contrario.<br>";
echo"<br>";
$ventas_dia = 6000;
if ($ventas_dia >= 5000) {
    echo "Fue un buen día de ventas.<br>";
} else {
    echo "Ventas bajas.<br>";
}
echo"______________________________________________________________________________________________________________________________<br>";

echo "2.- Haz un programa que guarde los gastos diarios de una semana en un arreglo indexado, calcule el total de gastos utilizando un ciclo y muestre también el promedio semanal.<br>";
echo"<br>";
$gastos_semanales = [1500, 2000, 1800, 2200, 1700, 1600, 1900];
$total_gastos = 0;
foreach ($gastos_semanales as $gasto) {
    $total_gastos += $gasto;
}
$promedio_gastos = $total_gastos / count($gastos_semanales);
echo "Total de gastos semanales: $$total_gastos<br>";
echo "Promedio de gastos semanales: $$promedio_gastos<br>";
echo"______________________________________________________________________________________________________________________________<br>";

echo "3.- Haz un programa que guarde los gastos diarios de una semana en un arreglo indexado, calcule el total de gastos utilizando un ciclo y muestre también el promedio semanal.<br>";
echo"<br>";
$gastos_semanales = [1500, 2000, 1800, 2200, 1700, 1600, 1900];
$total_gastos = 0;
foreach ($gastos_semanales as $gasto) {
    $total_gastos += $gasto;
}
$promedio_gastos = $total_gastos / count($gastos_semanales);
echo "Total de gastos semanales: $$total_gastos<br>";
echo "Promedio de gastos semanales: $$promedio_gastos<br>";
echo"______________________________________________________________________________________________________________________________<br>";

echo "4.- Haz un programa que guarde una lista de al menos cinco clientes en un arreglo indexado y muestre el nombre de cada cliente utilizando un ciclo.<br>";
echo"<br>";
$clientes = ["Carlos", "Ana", "Pedro", "Luisa", "Marta"];
foreach ($clientes as $cliente) {
    echo "Cliente: $cliente<br>";
}
echo"______________________________________________________________________________________________________________________________<br>";

echo "5.- Haz un programa que almacene las ventas de diferentes productos en un arreglo asociativo, muestre cada producto con la cantidad vendida y calcule el total de productos vendidos.<br>";
echo"<br>";
$ventas_productos = [
    "Producto A" => 150,
    "Producto B" => 200,
    "Producto C" => 120,
    "Producto D" => 300
];
$total_vendidos = 0;
foreach ($ventas_productos as $producto => $cantidad) {
    echo "$producto: $cantidad unidades vendidas<br>";
    $total_vendidos += $cantidad;
}
echo "Total de productos vendidos: $total_vendidos unidades<br>";
echo"______________________________________________________________________________________________________________________________<br>";
echo "6.- Haz un programa que guarde los precios de varios productos en un arreglo y calcule el precio total sumando todos los valores.<br>";
echo"<br>";
$precios_productos = [100, 250, 75, 300, 150];
$total_precio = 0;
foreach ($precios_productos as $precio) {
    $total_precio += $precio;
}
echo "Precio total de productos: $$total_precio<br>";
echo"______________________________________________________________________________________________________________________________<br>";
echo "7.- Haz un programa que almacene los nombres de varios empleados en un arreglo y muestre cuántos empleados hay registrados.<br>";
echo"<br>";
$empleados = ["Ana", "Luis", "Marta", "Carlos", "Luisa"];
$cantidad_empleados = count($empleados);
echo "Cantidad de empleados registrados: $cantidad_empleados<br>";
echo"______________________________________________________________________________________________________________________________<br>";
echo "8.- Haz un programa que almacene varios números en un arreglo y muestre únicamente los números mayores a 50 utilizando un ciclo y una condición.<br>";
echo"<br>";
$numeros = [10, 55, 70, 30, 85, 40, 90];
foreach ($numeros as $numero) {
    if ($numero > 50) {
        echo "Número mayor a 50: $numero<br>";
    }
}
echo"______________________________________________________________________________________________________________________________<br>";
echo "9.- Haz un programa que almacene las ventas de una semana y muestre cuántos días las ventas fueron mayores a $3,000.<br>";
echo"<br>";
$ventas_semana = [2500, 3200, 4500, 2800, 5000, 1500, 4000];
$dias_mayores_3000 = 0;
foreach ($ventas_semana as $venta) {
    if ($venta > 3000) {
        $dias_mayores_3000++;
    }
}
echo "Días con ventas mayores a $3,000: $dias_mayores_3000<br>";
echo"______________________________________________________________________________________________________________________________<br>";

echo "10.- Haz un programa que almacene el total de ventas de varios vendedores y determine cuál obtuvo la mayor venta.<br>";
echo"<br>";
$ventas_vendedores = [
    "Vendedor 1" => 4500,
    "Vendedor 2" => 5200,
    "Vendedor 3" => 4800,
    "Vendedor 4" => 6000
];
$mayor_venta = 0;
$mejor_vendedor = "";

foreach ($ventas_vendedores as $vendedor => $venta) {
    if ($venta > $mayor_venta) {
        $mayor_venta = $venta;
        $mejor_vendedor = $vendedor;
    }
}

echo "El vendedor con la mayor venta es $mejor_vendedor con $mayor_venta unidades vendidas.<br>";