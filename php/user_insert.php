<?php  
    include ("./conexion.php");

    echo "Insertando registro...<br>";

    $name = $_POST['txtName'];
    $last = $_POST['txtLast'];
    $age = $_POST['txtAge'];
    $peso = $_POST['txtPeso'];
    $es = $_POST['txtEs'];
    $email = $_POST['txtEmail'];
    $pass = $_POST['txtPassword'];
    $pass2 = $_POST['txtPass2'];

    echo "Nombre: ".$name."<br>";
    echo "Apellido: ".$last."<br>";
    echo "Edad: ".$age."<br>";
    echo "Peso: ".$peso."<br>";
    echo "Estatura: ".$es."<br>";
    echo "Email: ".$email."<br>";
    echo "Contraseña: ".$pass."<br>";
    echo "Contraseña: ".$pass2."<br>";
    $conexion->query("insert into users (name,last_name,age,weight,height,email,password) 
                    values 
                    ('$name','$last',$age,$peso,$es,'$email','$pass');"
                ) or die($conexion->error);




?>