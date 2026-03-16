<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["nombre"]) && isset($_POST["apellido_paterno"]) && isset($_POST["apellido_materno"]) && isset($_POST["anio_nacimiento"])){
        $nombre = strtolower(str_replace(" ", "", $_POST["nombre"]));
        $apellido_paterno = strtolower(str_replace(" ", "", $_POST["apellido_paterno"]));
        $apellido_materno = strtolower(str_replace(" ", "", $_POST["apellido_materno"]));
        $anio_nacimiento = $_POST["anio_nacimiento"];
        
        $sugerencia_a = substr($nombre, 0, 1) . $apellido_paterno;
        $sugerencia_b = $nombre . substr($anio_nacimiento, -2);
        $sugerencia_c = $apellido_paterno . $apellido_materno . substr($nombre, 0, 1);
        $sugerencia_d = substr($nombre, 0, 1) . substr($apellido_paterno, 0, 1) . substr($apellido_materno, 0, 1) . $anio_nacimiento;
        $sugerencia_e = strrev($apellido_paterno) . strlen($nombre . $apellido_paterno . $apellido_materno);
        
        echo("<p> Sugerencias de nombre de usuario: </p>");
        echo("<p> a. $sugerencia_a </p>");
        echo("<p> b. $sugerencia_b </p>");
        echo("<p> c. $sugerencia_c </p>");
        echo("<p> d. $sugerencia_d </p>");
        echo("<p> e. $sugerencia_e </p>");
    } else {
        echo("<p> Por favor completa todos los campos del formulario.</p>");
    }
}