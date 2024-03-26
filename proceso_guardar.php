<?php
$imagen='';
include("conexion.php");
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$edad = $_POST['Edad'];
$ta = $_POST['T/A'];
$tr = $_POST['T/R'];
$goles = $_POST['Goles'];
$imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
$numero = $_POST['Numero'];
$query = "INSERT INTO jugadores(Nombre,Apellido,Edad,TA,TR,GOLES,IMG,Numero)
Values('$nombre','$apellido','$edad','$ta','$tr','$goles','$imagen','$numero')";
$resultado = $conexion->query($query);

if ($resultado) {
    header("location:plantilla.php");


} else
    echo '  NOO guardo';

