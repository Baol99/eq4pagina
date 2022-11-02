<?php
require "conexion.php";
$id = $_GET['id'];
require "seguridad.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Ver Comentario</title>
</head>

<body>

  <?php
  include "includes/arriba.php"
  ?>

  <div class="ver">

    <?php
    $verperfil = "SELECT * FROM contacto WHERE id='$id'";
    $resultado = mysqli_query($conectar, $verperfil);
    $row = mysqli_fetch_assoc($resultado);
    ?>

    <div class="tit">
      <h1>Ver Comentarios</h1>
      <hr>
    </div>

    <div class="vercomen">
      <div class="comentarios">
        <h1>Datos Cliente</h1>
      </div>

      <div class="perfil">
        <h2 class="datoss">
          <label class="color" for="">Nombre del cliente: </label>
          <?php
          echo $row["nombre"];
          ?>
        </h2>
        <h3 class="datoss">
          <label class="color" for="">Correo: </label>
          <?php
          echo $row["correo"];
          ?>
        </h3>

        <h4 class="datoss">
          <label class="color" for="">Comentario: </label>
          <?php
          echo $row["comentario"];
          ?>
        </h4>
      </div>

    </div>

    <a class="btn2" href="mostrarcont.php">Regresar</a>

  </div>

  <?php
  include "includes/abajo.php"
  ?>

</body>

</html>