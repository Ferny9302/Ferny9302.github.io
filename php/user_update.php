<?php  
include "./conexion.php";
    $name = $_POST['txtName'];
    $ap = $_POST['txtLast'];
    $email = $_POST['txtEmail'];
    $id = $_POST['txtId'];

    $consulta="update users set 
    nombre='$name', 
    ap='$ap',
    email='$email' 
    where id =$id";

$conexion->query($consulta) or die($conexion->error);
//echo "Dato actualizado corretamente"
header("Location: ../users.php?status=1");
?>