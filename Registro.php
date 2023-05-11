<?php

include 'Conexion.php';

$id = $_POST["Id"];
$alias = $_POST["Alias"];
$correo = $_POST["Correo"];
$contrasena = $_POST["Contrasena"];

$inser = "INSERT INTO `usuarios` (`Id`, `Alias`, `Correo`, `Contrasena`) VALUES ('0', '$alias', '$correo', '$contrasena')";

$con = mysqli_query($connect, $inser);

if ($con){
    header('location: Login.html');
}else{
}

mysqli_close($connect);

?>