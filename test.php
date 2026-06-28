<?php

$nombre_ingresado = isset($_GET['nombre']) ? $_GET['nombre'] : 'Desconocido';
$edad_ingresada = isset($_GET['edad']) ? $_GET['edad'] : 'Desconocida';
// Este es un archivo de prueba para verificar que el servidor web está funcionando correctamente.
$nombre = "Lautaro";
$edad = 25;
$num1 = 10;
$num2 = 5;

echo "Hola, $nombre! Bienvenido a tu página de prueba.";
?>


<!doctype html>
<html>
  <head>
    <title>Pagina de Test</title>
  </head>
  <body>
    <h1>Pagina de Test </h1> 
    <p>Esta es una página de prueba simple.</p> <br><br>


    <?php
      echo "Hola, $nombre_ingresado! Bienvenido a tu página de prueba."; //-- Esto se muestra en la página web -->
      echo " <br>Tu edad es: $edad_ingresada años.<br>"; //-- Esto se muestra en la página web -->

//      echo "Esta es una prueba de PHP en un archivo HTML."
 // msgbox = "Esto es un mensaje de prueba.";
   

        $suma = $num1 + $num2;
        echo "La suma de $num1 y $num2 es: $suma.<br>"; 
 

        if ($edad >= 18) {
            echo "<strong>Eres mayor de edad.<br></strong>";
        } else {
            echo "<strong>Eres menor de edad.<br></strong>"; 
        }
    ?>

    <p> 
        <form action="test.php" method="get">
            <!-- Campo para ingresar el nombre -->
            <label for="nombre">Ingresa tu nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required> <br><br>

         
            <!-- Campo para ingresar la edad -->
            <label for="edad">Ingresa tu edad:</label>
            <input type="number" id="edad" name="edad" placeholder="Tu edad" required> <br><br>

            <!-- Campo para ingresar la fecha de nacimiento -->
            <label for = fecha> Ingresa tu fecha de nacimiento: </label>
            <input type="date" id="fecha" name="fecha"> <br><br>

            <!-- Campo para ingresar un mensaje -->
            <textarea name="mensaje" placeholder="Escribe un mensaje aquí..." rows="4" cols="50"></textarea> <br><br>

            <!-- El botón de envío para enviar el formulario -->
            <input type="submit" value="Enviar">
  </body>
</html>