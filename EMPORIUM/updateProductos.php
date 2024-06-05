<?php include 'conexion.php';

$ID = $_POST['ID'];
$Categoria = $_POST['Categoria'];
$Nombre = $_POST['Nombre'];
$Precio= $_POST['Precio'];

$act = $con -> query("UPDATE productos SET Categoria='$Categoria' ,
                        Nombre='$Nombre',Precio='$Precio' 
                        WHERE ID='$ID'");

if ($act) {
    echo "<script>
    location.href='formularioProductos.php';
    </script>";
}else{
    "<script>
    location.href='actualizarProductos.phpid=".$id."';
    </script>";
}