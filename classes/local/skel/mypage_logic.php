<?php
// Obtener los parámetros del nombre y apellido
$nombre = $_GET['nombre'] ?? '';
$apellido = $_GET['apellido'] ?? '';

// Comprobar si se proporcionaron ambos parámetros
if (!empty($nombre) && !empty($apellido)) {
    // Mostrar el texto en pantalla
    echo "Hola, $nombre $apellido. Bienvenido a mi página web.";
} else {
    // Mostrar un mensaje de error si falta algún parámetro
    echo "Por favor, proporciona tu nombre y apellido.";
}
