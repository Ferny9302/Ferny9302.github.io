<?php 
include "./conexion.php"; 
    $name = $_POST['txtName1'];
    $precio = $_POST['txtPrecio'];
    $description = $_POST['txtDes'];
    $categoria = $_POST['txtCat'];
    //$fecha = date('Y-m-d');//

    $file_name = $_FILES['txtFile']['name'];
    $temp = explode(".",$file_name);
    $ext = end($temp);
    $destino="../img/products/";
    $new_name=date('Y_m_d_h_i_s').rand(1000,9999).".".$ext;
    if(move_uploaded_file($_FILES['txtFile']['tmp_name'],$destino.$new_name)){
        echo "archivo subido correctamente\n";
        $con="insert into productos 
        values (0,
        '$name',
        '$precio',
        '$description',
        '$new_name',
        $categoria)";
        echo $con;
        $conexion->query($con) or die($conexion->error);
        echo "\n Registro insertado correctamente gg";
    }else{
        echo "No se cargo el archivo";
    }


    die();
    
?>