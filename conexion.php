<?php
$conexion = mysqli_connect("localhost","root","","leones");
if($conexion->connect_error){
    echo"conexion noooo";
}else{
    echo "<p id='mensaje1' class='floating-echo2'>CONECCION CORRECTA</p>";
    echo "<script>
            // Hacer que el mensaje desaparezca después de 3 segundos (3000 milisegundos)
            setTimeout(function() {
                var mensaje1 = document.getElementById('mensaje1');
                mensaje1.style.opacity = 0;
            }, 3000);
          </script>";
          
};