<?php session_start();
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
        echo "Apellido: ".$fila[2].'<br>';
        echo "Email: ".$fila[3].'<br>';
        echo "Nivel: ".$fila[5].'<br>';
        echo "Id: ".$fila[0].'<br>';
        $arr=[
            'id'=>$fila[0],
            'nombre'=>$fila[1],
            'apellido'=>$fila[2],
            'email'=>$fila[3],
            'nivel'=>$fila[5],
        ];
        $_SESSION['userdata']=$arr;
        
        if($fila[5] ==1){
            header("Location: ../control.php");
        }else{
            header("Location: ../dash_user.php");
        }

    }else{
        echo "DATOS NO VALIDOS";
        header("Location: ../login.php?error=datos no validos");
    }

?>