<?php 
    include "./conexion.php";
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];

    echo "Bienvenido $email Password: $password";
    echo '<br>';
    $query= "select * from users where email='$email' and password='$password';";
    $res = $conexion->query($query);
    if(mysqli_num_rows($res) > 0){
        echo "LOGIN CORRECTO <br>";
        $fila=mysqli_fetch_row($res);
        echo "Nombre: ".$fila[1].'<br>';
        echo "Nombre: ".$fila[2].'<br>';
        echo "Nombre: ".$fila[3].'<br>';
        echo "Nombre: ".$fila[0].'<br>';


    }else{
        echo "DATOS NO VALIDOS";
    }

?>