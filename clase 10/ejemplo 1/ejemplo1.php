<?php
//Predifinimos el usuario y contraseña correctos
    $username = "admin";
    $password = "123456";
// Verificamos si se han enviado los datos del formulario
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // verificamos si se han enviado los datos del formulario
    if(isset($_POST['username']) && isset($_POST['password'])){
        // Obtenemos los datos del formulario
        $Username_ingresado = $_POST['username'];
        $Password_ingresado = $_POST['password'];

        //validamos si el usuario y contraseña coinciden con los predeterminados
        if(($Username_ingresado === $username) && ($Password_ingresado === $password)){
            echo "<p style='color: green;'>¡Bienvenido, $Username_ingresado!</p>";
        } else {
            if($Username_ingresado !== $username && $Password_ingresado !== $password){
                echo "<p style='color: red;'>Usuario y contraseña incorrectos.</p>";
            } elseif ($Username_ingresado !== $username) {
                echo "<p style='color: red;'>Usuario incorrecto.</p>";
            } else {
                echo "<p style='color: red;'>Contraseña incorrecta.</p>";
            }
            }
        }
}
?>