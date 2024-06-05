<?php include 'conexion.php';

$ID = $_POST['ID'];
$Nombre = $_POST['Nombre'];

$act = $con -> query("UPDATE contacto SET Nombre='$Nombre'
                        WHERE ID='$ID'");

if ($act) {
    echo "<script>
    location.href='reseñas.php';
    </script>";
}else{
    "<script>
    location.href='actualizarContacto.phpid=".$ID."';
    </script>";
}