<?php include 'conexion.php';
$ID = $_REQUEST['ID'];

$selec = $con -> query ("SELECT * FROM productos WHERE ID=$ID");
if ($fila = $selec -> fetch_assoc()) {
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ACTUALIZAR Datos Productos</title>
</head>
<body>
    <header><!--DECORACION-->
        <h1> <img src="img/EmporiumGris.jpg" alt="EMPORIUM" width="118" height="68" class="centrar"></h1>
        <hr>
        <a href="index.html" class="button">Inicio</a>
    </header><br><!--DECORACION-->
    <form action="updateProductos.php" method="post">
        <fieldset>
            <label>ID</label>
            <input type="int" name="ID" placeholder="ID" value="<?php echo $fila['ID'] ?>"><br>
            <label>Categoria</label>
            <input type="text" name="Categoria" placeholder="Categoria" value="<?php echo $fila['Categoria'] ?>"><br>
            <label>Nombre</label>
            <input type="text" name="Nombre" placeholder="Nombre" value="<?php echo $fila['Nombre'] ?>"><br>
            <label>Precio</label>
            <input type="decimal" name="Precio" step="0.01" placeholder="Precio" value="<?php echo $fila['Precio'] ?>"><br>
        </fieldset>
        <input type="submit" value="Actualizar">
    </form><br><br>
</body>
</html>
