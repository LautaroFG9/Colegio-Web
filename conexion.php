<?php
$conexion = new mysqli("localhost", "root", "", "carrillo");

if ($conexion->connect_error) {
   // die("Error de conexión a la base de datos: " . $conexion->connect_error);
    echo "Error de conexión a la base de datos: " . $conexion->connect_error;
} 
else {
    echo "Conexión exitosa a la base de datos.";
}

?>