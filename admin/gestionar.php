<?php
require "seguridad.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Gestionar Paquetes</title>
</head>

<body>

  <?php
  include "includes/arriba.php"
  ?>

<div class="tit">
      <h1>Gestion del Paquete Turistico</h1>
      <hr>
    </div>

  <div class="tab">

    <table class="tabla">
      <tr class="titulo">
        <th>Imagen</td>
        <th>Nombre</td>
        <th>Categoria</td>
        <th>Precio</th>
        <th>Detalles</th>
        <th>Opcion</th>
      </tr>

      <?php
      include "conexion.php";
      $todos = "SELECT * FROM paquetes";
      $resultado = mysqli_query($conectar, $todos);
      while ($row = mysqli_fetch_assoc($resultado)) {
      ?>
        <tr>
          <td><img class="footo" src="<?php echo $row["ruta"]; ?>" alt=""></td>
          <td><?php echo $row["nombre"]; ?></td>
          <td><?php echo $row["categoria"]; ?></td>
          <td><?php echo $row["precio"]; ?></td>
          <td><?php echo $row["detalle"]; ?></td>
          <td><a class="es" href="verpaq.php?id=<?php echo $row["id"];?>"><img class="tam" src="img/ver.png" alt=""></a>
          <a class="es" href="#" onClick="validar('eliminarpaq.php?id=<?php echo $row["id"];?>')"> <img class="tam" src="img/borrar.png" alt=""></a></td>
        </tr>
      <?php
      }
      mysqli_free_result($resultado);
      ?>

    </table>
  </div>

  <?php
  include "includes/abajo.php"
  ?>

</body>

</html>

<script>
  function validar(url) {
    var eliminar = confirm("¿Realmente deseas Eliminar el POST?");
    if (eliminar == true) {
      window.location = url;
    }
  }
</script>