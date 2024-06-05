<?php include 'conexion.php';
$IDC = $_REQUEST['ID'];

$selecC = $con -> query ("SELECT * FROM contacto WHERE ID=$IDC");
if ($filaC = $selecC -> fetch_assoc()) {
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Actualizar Datos Productos</title>
</head>
<body>
    <header>
        <h1> <img src="img/EmporiumGris.jpg" alt="EMPORIUM" width="118" height="68" class="centrar"></h1>
        <hr>
        <a href="index.html" class="button">Inicio</a>
    </header><br>
    <form action="updateContacto.php" method="post">
        <fieldset>
            <label>ID</label>
            <input type="int" name="ID" placeholder="ID" value="<?php echo $filaC['ID'] ?>"><br>
            <label>Nombre</label>
            <input type="text" name="Nombre" placeholder="Nombre" value="<?php echo $filaC['Nombre'] ?>"><br>
        </fieldset>
        <input type="submit" value="Actualizar">
    </form><br><br>
</body>
</html>
