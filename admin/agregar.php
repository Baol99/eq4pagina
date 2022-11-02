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
  <title>Agregar Paquetes</title>
</head>

<body>

  <?php
  include "includes/arriba.php"
  ?>

  <div class="fo">

    <div class="tit">
      <h1>Agregar Paquetes</h1>
      <hr>
    </div>

    <form class="contfor" enctype="multipart/form-data" action="guardar.php" method="post">


      <fieldset>
        <div class="req">
          <p>Campos marcados con <span class="rojo">*</span> son obligatorios</p>
        </div>

        <div class="cam">

          <div class="campos">
            <label for="foto" class="etiquet" class="etiqueta">Subir foto <span class="rojo">*</span></label>
            <br><br>

            <label class="etiquet" for="nombre">Nombre del paquete <span class="rojo">*</span></label>
            <br><br>

            <label class="etiquet" for="categoria">Categoria <span class="rojo">*</span></label>
            <br><br>

            <label class="etiquet" for="precio">Precio <span class="rojo">*</span></label>
            <br><br>

            <label class="etiquet" for="titulo">Caracteristicas del paquete <span class="rojo">*</span></label>
            <br></br>
          </div>

          <div class="campos">
            <input class="etiqueta1" type="file" name="imagen" required>
            <br><br>

            <input required class="etiqueta1" type="text" name="nombre" id="" placeholder="">
            <br><br>

            <input required class="etiqueta1" type="text" name="categoria" id="" placeholder="">
            <br><br>

            <input required class="etiqueta1" type="text" name="precio" id="" placeholder="">
            <br><br>

            <textarea class="etiqueta2" name="detalle" required></textarea>
          </div>

        </div>

        <input class="btn2" type="submit" value="Enviar" />

      </fieldset>

    </form>
  </div>



  <?php
  include "includes/abajo.php"
  ?>

</body>

</html>