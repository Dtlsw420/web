<?php
include("conexion.php");
$nombre = $_POST['Nombre'];
$contraseña= $_POST['Contraseña'];
$correo= $_POST['Correo'];
$tipo = $_POST['Tipo'];
$query = "INSERT INTO usu(Nombre,Contraseña,Correo,Tipo)
Values('$nombre','$contraseña','$correo','$tipo')";
$resultado = $conexion->query($query);

if ($resultado) {
    header("location:login.php");

} else
    echo '  NOO guardo';

