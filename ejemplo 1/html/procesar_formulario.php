<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nombre = $_GET["nombre"];
    echo "Hola, " . htmlspecialchars($nombre) . "!";
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $edad = $_GET["edad"];
    echo "Tienes " . htmlspecialchars($edad) . " años!";
}
?>