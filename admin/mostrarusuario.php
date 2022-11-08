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
  <title>Usuarios</title>
</head>

<body>

  <?php
  include "includes/arriba.php"
  ?>

  <div class="tit">
    <h1>Gestion Usuarios</h1>
    <hr>
  </div>

  <div class="tab">
    <table class="tabla">
      <tr class="titulo">
        <th>Nombre</td>
        <th>Usuario</td>
        <th>Contraseña</td>
      </tr>

      <?php
      include "conexion.php";
      $todos = "SELECT * FROM usuarios";
      $resultado = mysqli_query($conectar, $todos);
      while ($row = mysqli_fetch_assoc($resultado)) {
      ?>
        <tr>
          <td><?php echo $row["nombre"]; ?></td>
          <td><?php echo $row["usuario"]; ?></td>
          <td><?php echo $row["contra"]; ?></td>
          <td><a class="es" href="verusu.php?id=<?php echo $row["id"]; ?>"><img class="tam" src="img/ver.png" alt=""></a>
            <a class="es" href="#" onClick="validar('eliminarusu.php?id=<?php echo $row["id"]; ?>')"> <img class="tam" src="img/borrar.png" alt=""></a>
          </td>
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
    var eliminar = confirm("¿Realmente deseas Eliminar este USUARIO?");
    if (eliminar == true) {
      window.location = url;
    }
  }
</script>