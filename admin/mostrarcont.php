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
  <title>Comentarios</title>
</head>

<body>

  <?php
  include "includes/arriba.php"
  ?>

<div class="tit">
      <h1>Gestion Contacto Cliente</h1>
      <hr>
    </div>

  <div class="tab">
    <table class="tabla">
      <tr class="titulo">
        <th>Nombre</td>
        <th>Correo</td>
        <th>Comentario</td>
        <th>Opcion</th>
      </tr>

      <?php
      include "conexion.php";
      $todos = "SELECT * FROM contacto";
      $resultado = mysqli_query($conectar, $todos);
      while ($row = mysqli_fetch_assoc($resultado)) {
      ?>
        <tr>
          <td><?php echo $row["nombre"]; ?></td>
          <td><?php echo $row["correo"]; ?></td>
          <td><?php echo $row["comentario"]; ?></td>
          <td><a class="es" href="vercome.php?id=<?php echo $row["id"];?>"><img class="tam" src="img/ver.png" alt=""></a>
          <a class="es" href="#" onClick="validar('eliminar.php?id=<?php echo $row["id"];?>')"> <img class="tam" src="img/borrar.png" alt=""></a></td>
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