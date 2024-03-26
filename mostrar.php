<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="styleplan.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar imagen </title>
</head>

<body>

</body>
<center>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>T/A</th>
                <th>T/R</th>
                <th>Goles</th>
                <th>Imagen</th>
                <th>Numero</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include ("conexion.php");
            $query = "SELECT*FROM jugadores";
            $resultado = $conexion->query($query);

            while ($row = $resultado->fetch_assoc()) {
                ?>
                <tr>
                    <td>
                        <?php echo $row['id_jugador']; ?>
                    </td>
                    <td><a href='login.php'>
                            <?php echo $row['Nombre']; ?>
                    </td>
                    <td>
                        <?php echo $row['Apellido']; ?>
                    </td>
                    <td>
                        <?php echo $row['Edad']; ?>
                    </td>
                    <td>
                        <?php echo $row['TA']; ?>
                    </td>
                    <td>
                        <?php echo $row['TR']; ?>
                    </td>
                    <td>
                        <?php echo $row['GOLES']; ?>
                    </td>
                    <td><img src="data:image/jpg;base64,<?php echo base64_encode($row['IMG']); ?>" /></td>
                    <td>
                        <?php echo $row['Numero']; ?>
                    </td>

                    <th><a href='modificar.php?id_jugador=<?php echo $row['id_jugador'];?>'>Modificar</th>
                    <th><a href='proceso_eliminar.php?id_jugador=<?php echo $row['id_jugador'];?>'>Elimnar</th></a>

                </tr>

                <?php
            }
            ?>
        </tbody>
    </table>
</center>

</html>