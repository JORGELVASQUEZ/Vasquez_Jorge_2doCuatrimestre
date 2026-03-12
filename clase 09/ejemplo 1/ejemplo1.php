<?php
//ejemplo 1: registro con validaciones vasicas

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["edad"])){
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $edad = $_POST["edad"];
        //remplazamos la contraseña con asteriscos
        $password = str_repeat("*", strlen($password));

        // Verificamos que la contraseña tenga al menos 8 caracteres
        if(strlen($password) < 8){
            echo "<p style='color:red;'>Error: La contraseña debe tener al menos <strong>8 caracteres</strong>.</p>";
        } 
        elseif($edad <= 0){
            echo "<p style='color:red;'>Error: La edad debe ser un número positivo.</p>";
            // si no se complen las condiciones anteriores, se puede proceder con el registro
        }else{
            echo "<h2 style='color:green;'>Registro exitoso</h2>";
            echo "<p><strong>Nombre:</strong> $nombre</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Contraseña:</strong> $password</p>";
            echo "<p><strong>Edad:</strong> $edad</p>";
        }
    // Verificamos que la edad sea un número y mayor o igual a 18
    }
}
?>