<?php
include 'conexion.php';

$sql = "SELECT * FROM profesores order by nombre";
$tabla = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Profesores</title>
    <link rel="stylesheet" href="estilos.css">

    <body>
        <h1>Listado de Profesores</h1>
        <table border = "1">
           <thead>
<tbody> 
    <?php while ($fila = mysqli_fetch_assoc($tabla)) { ?>
         <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['direccion']; ?></td>
                <td><?php echo $fila['email']; ?></td>

         </tr>
         <?php } ?>
           </thead>
       