<?php 
    if(isset($_GET['error'])){
        $error =$_GET['error'];
    }

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="./css/log.css">
    <link rel="stylesheet" href="./css/media_querylog.css">
</head>

<body>
    <h2 class="logo">PlayCode</h2>
    <div class="container">
        <div class="info">
            <h2>Welcome back</h2>
        </div>
        
        <form action="./php/login.php" method="post">
            <div class="inputs">
                <h3 class="txt">Email</h3>
                <input name="txtEmail" type="text" class="box" id="user" placeholder=" Ingresa tu email" required>
            </div>
            <div class="contra">
                <h4 class="txt">Password</h4>
                <input name="txtPassword" type="password" class="box" id="pass" placeholder=" Ingresa tu contraseña"
                    required>
            </div>


            <div class="btn1">
                <button class="btn" style="width: 30%;" id="login-btn" type="submit">
                    Log in
                </button>
            </div>
            <div>
                <ul>
                    <li>
                        <a href="./register.html" class="aqui">Register here</a>
                    </li>
                </ul>
            </div>
        </form>
    </div>
    <div class="mitad2">
        <img src="./img/control.jpg" alt="">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php 
        if(isset($error)){

        ?>
    <script>
        Swal.fire({
            icon: "error",
            title: "Cedenciales incorrectas",
            text: "Something went wrong!"
        });
    </script>
    <?php } ?>
    <!--<script src="./js/val.js"></script>-->



</body>

</html>