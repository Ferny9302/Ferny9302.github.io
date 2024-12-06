<?php  
    include ("./conexion.php");

    

    $name = $_POST['txtName'];
    $ap = $_POST['txtLast'];
    $email = $_POST['txtEmail'];
    $pass = $_POST['txtPassword'];
    $pass2 = $_POST['txtPass'];

    echo "nombre: ".$name."<br>";
    echo "ap: ".$ap."<br>";
    echo "email: ".$email."<br>";
    echo "pass: ".$pass."<br>";
    echo "pass2: ".$pass2."<br>";



    $con = "insert into users values (0,'$name','$ap','$email','$pass',2);";

    
    $conexion->query($con) or die($conexion->error);
    //echo "Dato actualizado corretamente"
    header("Location: ../users.php?status=1");




?>