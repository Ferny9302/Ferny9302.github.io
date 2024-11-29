<?php  
    $name = $_POST['txtName1'];
    $precio = $_POST['txtPrecio'];
    $description = $_POST['txtDes'];
    $categoria = $_POST['txtCat'];
    //$fecha = date('Y-m-d');//
    
    $con="insert into productos 
    values (0,
    '$name',
    '$precio',
    '$description',
    'control3',
    $categoria)";
    echo $con;
?>