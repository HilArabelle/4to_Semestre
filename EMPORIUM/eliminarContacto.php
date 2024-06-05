<?php
include 'conexion.php';

$ID=$_REQUEST['ID'];

$del = $con -> query("DELETE FROM contacto WHERE ID = '$ID'");

if ($del){
    echo"<script>
    location.href='reseñas.php';
    </script>";
}else{
    echo"<script>
    alert('El registro no pudo ser eliminado')
    location.href='formularioContacto.php';
    </script>";
}