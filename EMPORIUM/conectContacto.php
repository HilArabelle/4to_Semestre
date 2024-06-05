<?php include 'conexion.php';

$IDC = $_POST['ID']; 
$Nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$Comentario = $_POST['Comentario'];

$insert = $con -> query("INSERT INTO contacto (ID,Nombre,Correo,Comentario) VALUES
                         ('','$Nombre','$Correo','$Comentario')");

if ($insert){
    echo "<script>
    location.href='reseñas.php';
    </script>";
}else{
    echo "No se guardo ningun registro";
}
?>
