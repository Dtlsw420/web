<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
            include ("conexion.php");
            $id = $_REQUEST['id_jugador'];
          
            $query = " DELETE FROM jugadores WHERE id_jugador='$id'";
            $resultado = $conexion->query($query);
                              
                if ($resultado) {
    header("location:plantilla.php");

} else
    echo '  NOO Se Pudo Eliminar El Registro';
    ?> 
</body>
</html>