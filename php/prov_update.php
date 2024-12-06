<?php  
include "./conexion.php";
    $name = $_POST['txtName'];
    $telefono = $_POST['txtTel'];
    $product = $_POST['txtProduct'];
    $fecha = $_POST['txtDate'];
    $pago = $_POST['txtPago'];
    $id = $_POST['txtId'];

    $consulta="update proveedores set 
    nombre='$name',
    telefono='$telefono',
    producto='$product',
    fecha_pedido='$fecha',
    pago='$pago'
    where id = $id;";

$conexion->query($consulta) or die($conexion->error);
//echo "Dato actualizado corretamente"
header("Location: ../proveedor.php?status=1");
?>