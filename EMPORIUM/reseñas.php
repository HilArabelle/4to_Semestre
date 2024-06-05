<?php include 'conexion.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reseñas</title>
</head>
<body>
    <header><!--DECORACION-->
        <h1> <img  src="img/EmporiumGris.jpg" alt="EMPORIUM"  width="118" height="68" class="centrar" ></h1>
        <hr>
                <a href="index.html" class="button">Inicio</a>
                <a href="novedades.html" class="button">Novedades</a>
                <a href="mujer.html" class="button">Mujer</a>
                <a href="hombre.html" class="button">Hombre</a>
                <a href="niños.html" class="button">Niños</a><br>
    </header><br><!--DECORACION-->
    <table align="center" >
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Comentario</th>

        <?php
        $selec = $con -> query ("SELECT * FROM contacto");
        while ($fila = $selec -> fetch_assoc()){?>
        <tr>
            <td><?php echo $fila ['ID']?></td>
            <td><?php echo $fila ['Nombre']?></td>
            <td><?php echo $fila ['Correo']?></td>
            <td><?php echo $fila ['Comentario']?></td>

            <td><a class="button" href="actualizarContacto.php?ID= <?php echo $fila['ID'] ?>">Editar</a></td>
            <td><a class="button" href="eliminarContacto.php?ID= <?php echo $fila['ID'] ?>">Eliminar</a></td>
        </tr>
        <?php  }?>
    </table>
</body>
</html>