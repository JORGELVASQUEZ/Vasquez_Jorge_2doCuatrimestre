
<?php
    echo "Ejercicio 1: Crear un programa en php que calcule el area de un rectangulo (base * altura) y el perimetro  (2 * (base + altura)). Mostrar los resultados en pantalla.";
    $base = 10;
    $altura = 5;
    $area = $base * $altura;
    $perimetro = 2 * ($base + $altura);
    echo "<p>El area del rectangulo es: $area </p>";
    echo "<p>El perimetro del rectangulo es: $perimetro </p>";
    echo "<p>_________________________________________________________________________________________________________________________</p>";
    #_________________________________________________________________________________________________________________________________________
    echo "Ejercicio 2: Crear un programa en php que realice las siguientes converciones de monedas: De peso a dollar, de dolar a euro, de euro libra esterlina, y de peso a euro. muestra los resultados en pantalla.";
    $peso = 1000;
    $dollar = $peso / 17.94;
    $euro = $dollar * 0.86;
    $libra_esterlina = $euro * 0.87;
    $peso_a_euro = $euro * 20.94;
    echo "<p>$peso pesos son: $dollar dollars </p>";
    echo "<p>$dollar dollars son: $euro euros </p>";
    echo "<p>$euro euros son: $libra_esterlina libras esterlinas </p>";
    echo "<p>$euro euros son: $peso_a_euro pesos </p>";
    echo "<p>_________________________________________________________________________________________________________________________</p>";
    #_________________________________________________________________________________________________________________________________________
    echo "Ejercicio 3: crea un programa en php que calcule el imc (indice de masa corporal) de una persona. Muestra los resultados en pantalla. El imc se calcula con la suiguiente fomula IMC = peso (kg) / (altura (m))^2";
    $peso_kg = 70;
    $altura_m = 1.75;
    $imc = $peso_kg / ($altura_m ** 2);
    echo "<p>El indice de masa corporal (IMC) es: $imc </p>";
    echo "<p>_________________________________________________________________________________________________________________________</p>";
    #_________________________________________________________________________________________________________________________________________
    echo "Ejercicio 4: crea un programa en php que convierta una temperatura dada en grados celsius a farenheit y kelvin. Muestra los resultados en pantalla. las formulas son: Farenheit = (celsius * 9/5) + 32 y kelvin = celsius + 273.15.";
    $celsius = 22;
    $farenheit = ($celsius * 9/5) + 32;
    $kelvin = $celsius + 273.15;
    echo "<p>$celsius grados celsius son: $farenheit grados farenheit </p>";
    echo "<p>$celsius grados celsius son: $kelvin grados kelvin </p>";
    echo "<p>_________________________________________________________________________________________________________________________</p>";
    #_________________________________________________________________________________________________________________________________________
?>