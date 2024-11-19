<?php 
    $server ="localhost";
    $user ="root";
    $pass="";
    $db="playcode";
    $conexion = new mysqli($server,$user,$pass,$db);
    if($conexion->connect_error){
        die("No se pudo conectar a MYSQL PRENDE EL MYSQL");
    }

?>