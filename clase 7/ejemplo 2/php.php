<?php
// ejemplo 2: Realiza un programa que reciba una lista de nombres separados por coma a traves de un formulario HTML y utilizando el metodo GET, luego el programa debe procesar la lista de nombres y mostrar cada nombre en una linea diferente, ademas de contar cuantos nombres se ingresaron y mostrar el total al final.

if(isset($_GET['nombres'])){ // Verificar si se ha enviado el formulario y si el campo 'nombres' no está vacío
    $nombres = $_GET['nombres'];// Obtener la cadena de nombres ingresada por el usuario
    $lista_nombres = explode(', ', $nombres); // Separar la cadena en un array utilizando la coma como delimitador
    $total_nombres = count($lista_nombres); // Contar el total de nombres
    echo "Nombres ingresados:<br>"; // Mostrar un encabezado
    foreach($lista_nombres as $nombre){ // Recorrer el array de nombres
        echo $nombre . "<br>"; // Mostrar cada nombre en una línea diferente
    }
    echo "Total de nombres ingresados: " . $total_nombres; // Mostrar el total de nombres ingresados
    echo "<br><a href='index.html'>Volver al formulario</a>"; // Enlace para volver al formulario
} else {
    echo "Por favor, ingresa una lista de nombres separados por coma."; // Mensaje
    echo "<br><a href='index.html'>Volver al formulario</a>"; // Enlace para volver al formulario
    
}