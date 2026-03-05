<?php

if(isset($_GET['celcius'])){

    $celcius = $_GET['celcius'];

    $fahrenheit = ($celcius * 9/5) + 32;
    $kelvin = $celcius + 273.15;

    echo "<h2>Temperatura original: {$celcius} °C</h2>";
    echo "<h2>Temperatura convertida a Fahrenheit: {$fahrenheit} °F</h2>";
    echo "<h2>Temperatura convertida a Kelvin: {$kelvin} K</h2>";

}