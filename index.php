<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Document</title>
    <link rel="stylesheet" href="stylehome.css">
</head>
<body>
<main class="main">
  <section class="contenedorsection-1"> 
      <?php
      include 'header.php'
      ?>
  </section>
 
 

  <section class="contenedorsection-2">
    <?php
    include 'carrusel.php'
    ?>
  </section><br><br><br>
  <section class="star">
    <?php
    include 'session_start.php'
    ?>
  <section class="contenedorsection-3">
    <?php
    include 'video.php'
    ?>
  </section><br><br><br>
  <section class="contenedorsection-4">
  <?php
    include 'footer.php'
    ?>
  </section>
  

 
</html>