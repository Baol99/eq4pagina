<?php
require "seguridad.php";
// session_start();
$usuario=$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Panel</title>
</head>

<body>

  <?php
  include "includes/arriba.php"
  ?>

  <div class="panel">
    <h1>Bienvenido en el panel administrativo</h1>
    <img src="img/mexico.jpg" alt="">
  </div>






  <?php
  include "includes/abajo.php"
  ?>

</body>

</html>