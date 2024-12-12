<?php  
    include ("./conexion.php");

    

    $name = $_POST['txtName'];
    $telefono = $_POST['txtTel'];
    $product = $_POST['txtPro'];
    $cant = $_POST['txtCantidad'];
    $fe = $_POST['txtFe'];
    $pa = $_POST['txtPa'];

    echo "nombre: ".$name."<br>";
    echo "ap: ".$telefono."<br>";
    echo "email: ".$product."<br>";
    echo "pass: ".$fe."<br>";
    echo "pass2: ".$pa."<br>";



    $con = "insert into proveedores  (nombre,telefono,producto,cantidad,fecha_pedido,pago) 
    values ('$name','$telefono','$product','$cant','$fe','$pa');";

    
    $conexion->query($con) or die($conexion->error);
    //echo "Dato actualizado corretamente"
    header("Location: ../proveedor.php?status=1");




?>