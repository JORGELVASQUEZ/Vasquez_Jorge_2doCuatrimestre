<?php
    // clase 02 - 12-01-2026

    // operadores en php

    // operadores aritmeticos

    $num1 = 25;
    $num2 = 10;
    $num3 = 30;

    $suma = $num1 + $num2; // suma
    $resta = $num2 - $num3; // resta
    $multiplicacion = $num3 * $num2; // multiplicacion
    $division = $num1 / $num2; // division
    $modulo = $num1 % $num3; // modulo : resudio de una division
    $exponente = $num1 ** 2; // exponente : potencia
    echo "<p>suma: $suma <br> resta: $resta <br> multiplicacion: $multiplicacion <br> division: $division <br> modulo: $modulo <br> exponente: $exponente <br></p>";

    // operadores de asignacion
    $a = 5; // asignacion simple
    echo "<p>valor inicial de a: $a </p> <br>";
    $a += 3;  //suma y asigna
    echo "<p>valor de a despues de +=3: $a </p> <br>";
    $a -= 2;  //resta y asigna
    echo "<p>valor de a despues de -=2: $a </p> <br>";
    $a *= 4;  //multiplica y asigna
    echo "<p>valor de a despues de *=4: $a </p> <br>";
    $a /= 2;  //divide y asigna
    echo "<p>valor de a despues de /=2: $a </p> <br>";
    $a %= 5;  //modulo y asigna
    echo "<p>valor de a despues de %=5: $a </p> <br>";
    $a **= 3;  //exponente y asigna
    echo "<p>valor de a despues de **=3: $a </p> <br>";

    // operadores de comparacion
    $num4 = 15;
    $mayor = $num1 > $num4; // mayor que
    $menor = $num1 < $num4; // menor que
    $igual = $num1 == $num4; // igual a: comparación simple, que solo compara valores -> 2 == '2' (true)
    $igualdad_estricta = $num1 === $num4; // igualdad estricta: compara valores y tipos de datos -> 2 === '2' (false)
    $diferente = $num1 != $num4; // distinto que
    $mayor_igual = $num1 >= $num4; // mayor o igual
    $menor_igual = $num1 <= $num4; // menor o igual
   echo "<p> Comparaciones: <br> mayor que: $mayor <br> menor que: $menor <br> igual a: $igual <br> igualdad estricta: $igualdad_estricta <br> diferente: $diferente <br> mayor o igual: $mayor_igual <br> menor o igual: $menor_igual <br></p>";
   
   // operadores logicos
    $x = true;  
    $y = false;

    $and = $x && $y; // AND: devuelve true si ambos son true
    $or = $x || $y; // OR: devuelve true si al menos uno es true
    $not = !$x; // NOT: invierte el valor
    echo "<p> Operadores logicos: <br> AND logico: $and <br> OR logico: $or <br> NOT logico: $not <br></p>";
   
?>
