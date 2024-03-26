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
       
            $query = "SELECT*FROM jugadores WHERE id_jugador='$id'";
            $resultado = $conexion->query($query);
            $row = $resultado->fetch_assoc();
           
                ?>
<div class="tabla">
    <center>
      <br><br><br><br><br><br>
      <H2>MODIFICAR</H2>
      <form action="proceso_guardar.php" method="Post"  enctype="multipart/form-data">
        <input type="text"  Required name="Nombre" placeholder="Nombre...." value="<?php echo $row['Nombre'];?>" />
        <input type="text" Required name="Apellido" placeholder="Apellido..." value="<?php echo $row['Apellido'];?>" />
        <input type="int" Required name="Edad" placeholder="Edad...." value="<?php echo $row['Edad'];?>" />
        <input type="int" Required name="T/A" placeholder="T/A...." value="<?php echo $row['TA'];?>" />
        <input type="int" Required name="T/R" placeholder="T/R...." value="<?php echo $row['TR'];?>" />
        <input type="int" Required name="Goles" placeholder="Goles...." value="<?php echo $row['GOLES'];?>" />
        <input type="int" Required name="Numero" placeholder="Numero...." value="<?php echo $row['Numero'];?>" />
        <img src="data:image/jpg;base64,<?php echo base64_encode($row['IMG']); ?>" />
        <input type="file" Required name="Imagen" />
        <input type="submit" name="aceptar">
      </form>
  </div>
  </center>

  <div>
</body>
</html>