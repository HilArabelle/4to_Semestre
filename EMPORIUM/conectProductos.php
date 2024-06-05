<?php include 'conexion.php';

$Categoria = $_POST['Categoria'];
$Nombre = $_POST['Nombre'];
$Precio = $_POST['Precio'];

$insert = $con -> query("INSERT INTO productos (ID,Categoria,Nombre,Precio) VALUES
                         ('','$Categoria','$Nombre','$Precio')");

if ($insert){
    echo"<script>
    location.href='formularioProductos.php';
    </script>";
}else{
    echo"No se gurdo ningun registro";
}
