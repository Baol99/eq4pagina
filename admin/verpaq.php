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
    $verperfil = "SELECT * FROM paquetes WHERE id='$id'";
    $resultado = mysqli_query($conectar, $verperfil);
    $row = mysqli_fetch_assoc($resultado);
    ?>

    <div class="tit">
      <h1>Ver Detalles del Paquete Turistico</h1>
      <hr>
    </div>

    <div class="vercomen">
      <div class="comentarios">
        <h1>Datos de los paquetes</h1>
      </div>

      <div class="perfil">

        <h2 class="datoss">
          <label class="color" for="">Foto: </label>
          <img class="footo" src="<?php echo $row["ruta"]; ?>" alt="">
        </h2>

        <h2 class="datoss">
          <label class="color" for="">Nombre del paquete: </label>
          <?php
          echo $row["nombre"];
          ?>
        </h2>
        <h3 class="datoss">
          <label class="color" for="">Categoria: </label>
          <?php
          echo $row["categoria"];
          ?>
        </h3>

        <h4 class="datoss">
          <label class="color" for="">Precio: </label>
          <?php
          echo $row["precio"];
          ?>
        </h4>

        <h4 class="datoss">
          <label class="color" for="">Detalles: </label>
          <?php
          echo $row["detalle"];
          ?>
        </h4>
      </div>

    </div>

    <a class="btn2" href="gestionar.php">Regresar</a>

  </div>

  <?php
  include "includes/abajo.php"
  ?>

</body>

</html>