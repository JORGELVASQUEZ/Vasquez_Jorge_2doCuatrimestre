<?php

$num1 = 28;
$num2 = 15;
//condcionales

//condicional if simple
if ($num1 > $num2) {
    echo "$num1 es mayor que $num2<br>";
}

//condicional if - else
if ($num1 < $num2) {
    echo "$num1 es menor que $num2<br>";
} else {
    echo "$num1 no es menor que $num2<br>";
}

//condicional if - elseif - else
if ($num1 < $num2) {
    echo "$num1 es menor que $num2<br>";
} elseif ($num1 > $num2) { // python: elif
    echo "$num1 es mayor que $num2<br>";
} else {
    echo "$num1 es igual a $num2<br>";
}

//condicional switch
$dia = 3;
switch ($dia) {
    case 1:
        echo "Lunes<br>";
        break;
    case 2:
        echo "Martes<br>";
        break;
    case 3:
        echo "Miércoles<br>";
        break;
    case 4:
        echo "Jueves<br>";
        break;
    case 5:
        echo "Viernes<br>";
        break;
    case 6:
        echo "Sábado<br>";
        break;
    case 7:
        echo "Domingo<br>";
        break;
    default:
        echo "Día inválido<br>";
        break;
}

//bucles

//bucle while
$contador = 0;

while ($contador < 10) {
    echo "Contador (while): $contador<br>";
    $contador++;
}

//bucle do - while
$contador2 = 0;
do {
    echo "Contador (do-while): $contador2<br>";
    $contador2++;
} while ($contador2 < 10);

//bucle for
for ($i = 0; $i < 10; $i++) {
    echo "Contador (for): $i<br>";
}

//bucle foreach
$frutas = array("Manzana", "pera", "mango", "kiwi", "uva");
foreach ($frutas as $fruta) {
    echo "Fruta: $fruta<br>";
}

// array indexado
$numeros = array(10, 20, 30, 40, 50, 60, 70); //indices 0, 1, 2, 3, 4, 5, 6
foreach ($numeros as $numero) {
    echo "Número: $numero<br>";
}

// array asociativo
$persona = array(
    "nombre" => "Juan",
    "edad" => 30,
    "ciudad" => "Madrid",
    "profesion" => "abogado"
);
foreach ($persona as $clave => $valor) {
    echo "$clave: $valor<br>";
}

// array multidimensional

$empleados = array(
    array(
        "idEmpleado" => 1,
        "nombre" => "Ana",
        "departamento" => "Recursos Humanos",
        "salario_quincenal" => 6000
    ),
    array(
        "idEmpleado" => 2,
        "nombre" => "Luis",
        "departamento" => "Ventas",
        "salario_quincenal" => 5500
    ),
    array(
        "idEmpleado" => 3,
        "nombre" => "Marta",
        "departamento" => "Marketing",
        "salario_quincenal" => 7000
    )
);
foreach ($empleados as $empleado) {
    echo "ID: " . $empleado["idEmpleado"] . "<br>";
    echo "Nombre: " . $empleado["nombre"] . "<br>";
    echo "Departamento: " . $empleado["departamento"] . "<br>";
    echo "Salario Quincenal: $" . $empleado["salario_quincenal"] . "<br><br>";
}

// funciones para arrays
$nombres = array("Carlos", "Ana", "pedro", "Luisa");
sort($nombres); // ordena el array en orden ascendente
echo "Nombres ordenados:<br>";
foreach ($nombres as $nombre) {
    echo "$nombre<br>";
}   

// contar elementos del array
$cantidad_nombres = count($nombres);
echo "Cantidad de nombres: $cantidad_nombres<br>";

// agregar un elemento a array
array_push($nombres, "Miguel");
echo "Nombres después de agregar Miguel:<br>";
foreach ($nombres as $nombre) {
    echo "$nombre<br>";
}
// eliminar el último elemento del array
array_pop($nombres);
echo "Nombres después de eliminar el último elemento:<br>";
foreach ($nombres as $nombre) {
    echo "$nombre<br>";
}
// buscar un elemento en el array
$buscar = "Ana";
if (in_array($buscar, $nombres)) {
    echo "$buscar se encuentra en el array.<br>";
} else {
    echo "$buscar no se encuentra en el array.<br>";
}
// combinar dos arrays
$array1 = array("A", "B", "C");
$array2 = array("D", "E", "F");
$combinado = array_merge($array1, $array2);
echo "Array combinado:<br>";
foreach ($combinado as $elemento) {
    echo "$elemento<br>";
}
