<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Paquetes</title>
</head>

<body>

  <?php
  include "includes/arriba.php"
  ?>

  <div class="paque">

    <div class="tit">
      <h1>Listado de paquetes</h1>
      <hr>
    </div>

    <div class="tab">
      <table class="table">
      <?php
        include "conexion.php";
        $todos = "SELECT * FROM paquetes";
        $resultado = mysqli_query($conectar, $todos);
        while ($row = mysqli_fetch_assoc($resultado)) {
        ?>
        
          <tr>
            <td class="foto2" colspan="2"><img class="foto2" src="img/paquetes.jpg" alt=""></td>
            </tr>

            <tr>

            <td class="negritas2">Nombre</td>
            <td class="lado"><?php echo $row["nombre"]; ?></td>
          </tr>

          <tr>
            <td class="negritas2">Categoria</td>
            <td class="lado"><?php echo $row["categoria"]; ?></td>
          </tr>

          <tr>
            <td class="negritas2">Precio</td>
            <td class="lado"><?php echo $row["precio"]; ?></td>
          </tr>

          <tr>
            <td class="negritas2">Detalle</td>
            <td class="lado"><?php echo $row["detalle"]; ?></td>
          </tr>

          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
        <?php
        }
        mysqli_free_result($resultado);
        ?>
      </table>
</div>

    <div class="vidf">

      <div class="video">
        <iframe src="https://www.youtube.com/embed/7Of7C0NaspA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

    <div class="sus">
    <div class="fo">
        <form action="raw_enviar_mailer.php" class="email" method="POST">
          <h4>Suscribete para encontrar las mejores ofertas</h4>
          <input name="nombre" class="etiqueta3" type="text" placeholder="Escribe aquí tu Nombre ">

          <input required name="registro" class="etiqueta3" type="text" placeholder="Escribe aquí tu correo ">

          <input class="btn2" type="submit" value="Enviar" />
        </form>

      </div>
    </div>





  <?php
  include "includes/abajo.php"
  ?>

</body>

</html>