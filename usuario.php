
<?php
include 'conexion.php';
// Verificar si se ha enviado el formulario de inicio de sesión


if(isset($_POST['btningreso'])) {
    // Verificar si se proporcionaron datos de usuario y contraseña
    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo "LOS CAMPOS ESTÁN VACÍOS";
    } else {
        // Establecer variables con los datos del formulario
        $usuario = $_POST["username"];
        $password = $_POST["password"];
    
        
        // Realizar la consulta SQL (asumiendo que $conexion es tu conexión a la base de datos)
        $sql = $conexion->prepare("SELECT * FROM usu WHERE nombre = ? AND Contraseña = ?");
        $sql->bind_param("ss", $usuario, $password);
        $sql->execute();
        $resultado = $sql->get_result();
        
        // Verificar si se encontraron datos de usuario válidos

        if($resultado->num_rows > 0  ) {
            $fila = $resultado->fetch_assoc();
            $tipo = $fila['tipo'];
           
            // Iniciar sesión y redirigir al usuario a la página de inicio
            session_start();
            $_SESSION['username'] = $usuario;     
            $_SESSION['tipo'] = $tipo;

           header("Location: index.php");
            
            exit();

        } else {
            echo "<p id='mensaje' class='floating-echo'>ACCESO DENEGADO</p>";
            echo "<script>
                    // Hacer que el mensaje desaparezca después de 3 segundos (3000 milisegundos)
                    setTimeout(function() {
                        var mensaje = document.getElementById('mensaje');
                        mensaje.style.opacity = 0;
                    }, 3000);
                  </script>";
        }
    }
}
?>










