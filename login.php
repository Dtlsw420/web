
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="styleslog.css">
  <script src="scrip.js"></script>
</head>
<body>
<div class="contenido">
      
      <?php
      // Incluir el archivo PHP sin afectar el estilo
      include 'header.php';
      ?>
<?php
      // Incluir el archivo PHP sin afectar el estilo
      include 'usuario.php';
      ?>
  </div>
  <div class="login-container">
    <h2>Login</h2>
    <form method="post" action="">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
     <button class="boton"name="btningreso" type="submit">Login</button> 
      <li><a href="registro.php" class="item">Registrarse</li>
    
    </form>
<a href="salir.php">Salir</a>
    </div>
   
  </div>

  
  <div class="pie">  
     <?php
        // Incluir el archivo PHP sin afectar el estilo
        include 'footer.php';
        ?>
        </div>
</body>

</html>