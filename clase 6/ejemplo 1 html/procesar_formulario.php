<?php
echo '<link rel="stylesheet" href="style.css">';
if(isset($_GET["nombre"]) && isset($_GET["edad"])){
$nombre = $_GET["nombre"];
$edad = $_GET["edad"];

//validar que el nombre no este vacio y que la edad sea un numero positivo
if(!empty($nombre) && !empty($edad) && is_numeric($edad) && $edad > 0){
    $nombre = trim($nombre);
    $edad = trim($edad);
    echo "<h1>Hola, " . htmlspecialchars($nombre) . "!</h1><br>";
    echo "<p>Tienes " . htmlspecialchars($edad) . " años!</p><br>";}
else{
    echo "<p class='error'>Por favor, ingresa un nombre y una edad validos.</p><br>";}
}
?>