<?php
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    $palabras = explode(' ', $nombre);
    $iniciales = '';
    foreach ($palabras as $palabra) {
        $iniciales .= strtoupper($palabra[0]) . '.';
    }
    echo "Iniciales: " . $iniciales;
}