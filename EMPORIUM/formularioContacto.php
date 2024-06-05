<?php include 'conexion.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario Contacto</title>
</head>
<body>
    <header>
        <h1> <img  src="img/EmporiumGris.jpg" alt="EMPORIUM"  width="118" height="68" class="centrar" ></h1>
        <hr>
            <a href="index.html" class="button">Inicio</a>
            <a href="novedades.html" class="button">Novedades</a>
            <a href="mujer.html" class="button">Mujer</a>
            <a href="hombre.html" class="button">Hombre</a>
            <a href="niños.html" class="button">Niños</a><br>
    </header><br>
    <form action="conectContacto.php" method="post" align="center">
        <!--<label for="fname">ID</label><br>
        <input type="text" type="int" name='ID' placeholder="ID"><br>-->
        <label for="fname">Nombre</label><br>
        <input type="varchar" name='Nombre' placeholder="Nombre "><br>
        <label for="fname">Correo</label><br>
        <input type="varchar" name='Correo' placeholder="Correo"><br>
        <label for="fname">Comentario</label><br>
        <input type="varchar" name='Comentario' placeholder="Comentario"><br>

        <input type="submit" value="Guardar">
    </form><br><br>
    <div align="center">
        <label for="fname">Reseñas</label><br>
     <a href="reseñas.php" class="button">Ver</a><br>
    </div>
    
</body>
</html>