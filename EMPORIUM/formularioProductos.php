<?php include 'conexion.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario Productos</title>
</head>
<body>
    <header><!--DECORACION-->
        <h1> <img  src="img/EmporiumGris.jpg" alt="EMPORIUM"  width="118" height="68" class="centrar" ></h1>
        <hr>
            <a href="index.html" class="button">Inicio</a>
    </header><br><!--DECORACION-->
    <form action="conectProductos.php" method="post" align="center">
        <label for="fname">ID</label><br>
        <input type="int" name='ID' placeholder="ID"><br>
        <label for="fname">Categoria</label><br>
        <input type="varchar" name='Categoria' placeholder="Categoria"><br>
        <label for="fname">Nombre</label><br>
        <input type="varchar" name='Nombre' placeholder="Nombre "><br>
        <label for="fname">Precio</label><br>
        <input type="decimal" name='Precio' placeholder="Precio"><br>

        <input type="submit" value="Guardar">
    </form><br><br>

    <table align="center">
        <th>ID</th>
        <th>Categoria</th>
        <th>Nombre</th>
        <th>Precio</th>

        <?php
        $selec = $con -> query ("SELECT * FROM productos");
        while ($fila = $selec -> fetch_assoc()){?>
        <tr>
            <td><?php echo $fila ['ID']?></td>
            <td><?php echo $fila ['Categoria']?></td>
            <td><?php echo $fila ['Nombre']?></td>
            <td><?php echo $fila ['Precio']?></td>

            <td><a class="button" href="actualizarProductos.php?ID= <?php echo $fila['ID'] ?>">Editar</a></td>
        </tr>
        <?php  }?>
    </table>
</body>
</html>