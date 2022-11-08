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
    $verperfil = "SELECT * FROM usuarios WHERE id='$id'";
    $resultado = mysqli_query($conectar, $verperfil);
    $row = mysqli_fetch_assoc($resultado);
    ?>

    <div class="tit">
      <h1>Ver Usuarios</h1>
      <hr>
    </div>

    <div class="vercomen">
      <div class="comentarios">
        <h1>Datos Cliente</h1>
      </div>

      <div class="perfil">
        <h2 class="datoss">
          <label class="color" for="">Nombre: </label>
          <?php
          echo $row["nombre"];
          ?>
        </h2>
        <h3 class="datoss">
          <label class="color" for="">Usuario: </label>
          <?php
          echo $row["usuario"];
          ?>
        </h3>

        <h4 class="datoss">
          <label class="color" for="">Contraseña: </label>
          <?php
          echo $row["contra"];
          ?>
        </h4>
      </div>

    </div>

    <a class="btn2" href="mostrarusuario.php">Regresar</a>

  </div>

  <?php
  include "includes/abajo.php"
  ?>

</body>

</html>