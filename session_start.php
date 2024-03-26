<?php
  session_start();
    $usuario=$_SESSION['username'];
    $tipo=$_SESSION['tipo'];

  
    if(!isset($usuario)){
      header("location:login.php");
     }else{

      echo "<h1>BIENVENIDO LEON <br>
                 $usuario  </h1>";
      
      }
    

  