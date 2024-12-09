<?php  
    include "./conexion.php";
    $id=$_POST['id'];


    echo "id: ".$id."<br>";

    $con="delete from users where id = $id;";
    $conexion->query($con) or die($conexion->error);
    header("Location: ../proveedor.php?status=1");
?>