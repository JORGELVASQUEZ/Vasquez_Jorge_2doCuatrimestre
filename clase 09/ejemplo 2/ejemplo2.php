<?php
//ejemplo 2: Encuesta de satisfacción
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // verificamos que los datos hayan sido enviados
    if (isset($_POST["nombre"]) && isset($_POST["satisfaccion"]) && isset($_POST["comentarios"])) {
        // guardamos los datos en variables
        $nombre = $_POST["nombre"];
        $satisfaccion = $_POST["satisfaccion"];
        $comentarios = $_POST["comentarios"];
        // procesamos los datos (en este caso, simplemente los mostramos)
        echo "<h2>Resultados de la encuesta:</h2>";
        echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
        echo "<p><strong>Satisfacción:</strong> " . $satisfaccion . "</p>";
        echo "<p><strong>Comentarios:</strong> " . $comentarios . "</p>";
        echo "<h2>¡Gracias por participar en la encuesta!</h2>";
        echo "<p><a href='ejemplo2.html'>Volver a la encuesta</a></p>";
    } else {
        echo "Por favor, complete todos los campos de la encuesta.";
    }
}
?>