<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Styled Table</title>
  <link rel="stylesheet" href="styleplan.css">

</head>

<body>
  <div class="contenido">

    <?php
    // Incluir el archivo PHP sin afectar el estilo
    include 'header.php';
    ?>
     <?php
    // Incluir el archivo PHP sin afectar el estilo
    include 'session_start.php';
    ?>
  </div>
  <?php
   $tipo=$_SESSION['tipo'];
   if ($tipo == 1) {
    echo '<div class="tabla">';
    echo '<center>';
    echo '<br><br><br><br><br><br>';
    echo '<H2>Nuevo Ingreso</H2>';
    echo '<form action="proceso_guardar.php" method="Post"  enctype="multipart/form-data">';
    echo '<input type="text"  Required name="Nombre" placeholder="Nombre...." value="" />';
    echo '<input type="text" Required name="Apellido" placeholder="Apellido..." value="" />';
    echo '<input type="int" Required name="Edad" placeholder="Edad...." value="" />';
    echo '<input type="int" Required name="T/A" placeholder="T/A...." value="" />';
    echo '<input type="int" Required name="T/R" placeholder="T/R...." value="" />';
    echo '<input type="int" Required name="Goles" placeholder="Goles...." value="" />';
    echo '<input type="int" Required name="Numero" placeholder="Numero...." value="" />';
    echo '<input type="file" Required name="Imagen" />';
    echo '<input type="submit" name="aceptar">';
    echo '</form>';
    echo '</center>';
    echo '</div>';
  
    include 'mostrar.php';
  
} else {
    echo "Lector";
    
    include 'mostrar copy.php';
}
  
?>


  <div class="pie">  
     <?php
        // Incluir el archivo PHP sin afectar el estilo
        include 'footer.php';
        ?>
        </div>
</body>

</html>