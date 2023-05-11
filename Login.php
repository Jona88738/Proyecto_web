<?php

include 'Conexion.php';

$correo = $_POST['Correo'];
$contrasena = $_POST["Contrasena"];

$consu = mysqli_query($connect, "SELECT * FROM usuarios WHERE Correo = '$correo' && Contrasena = '$contrasena'");

$fila = mysqli_num_rows($consu);

if(!$consu){
    session_start();
    header("location: index.php");
}else{
    header("location: index.php");
}

mysqli_close($connect);

?>