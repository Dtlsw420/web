<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="styleslog.css">
</head>

<body>
  <div class="contenido">

    <?php
    // Incluir el archivo PHP sin afectar el estilo
    include 'header.php';
    ?>
  </div>

  <div class="login-container">
    <h2>Registro</h2>
    <form action="proceso_registro.php" method="Post" enctype="multipart/form-data">
      <div class="form-group">
        <input type="text" Required name="Nombre" placeholder=" Ingrese su Nombre...." value="" />
      </div>
      <div class="form-group">
        <input type="Password" Required name="Contraseña" placeholder="Ingrese su Contraseña..." value="" />
      </div>
      <div class="form-group">
        <input type="text" Required name="Correo" placeholder="Ingrese su Correo...." value="" />
      </div>
      <div class="form-group">
        <input type="text" Required name="Tipo" placeholder="Tipo...." value="" />
      </div>
      <button type="submit" name="aceptar">Guardar</button>
    </form>
  </div>

  <div class="pie">
    <?php
    // Incluir el archivo PHP sin afectar el estilo
    include 'footer.php';
    ?>
  </div>

</body>

</html>