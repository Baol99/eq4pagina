<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Contactanos</title>
</head>

<body>
  <?php
  include "includes/arriba.php"
  ?>

  <div class="fo">

    <div class="tit">
      <h1>Contactanos</h1>
      <hr>
    </div>

    <form class="contfor" action="guardar.php" method="post">
      <div class="linea">
        <h2>¿Tienes algo que sugerir o desea una orientacion personalizada?</h2>
        <h3>!No dudes en contactarnos¡</h3>
      </div>

      <fieldset>
        <div class="req">
          <p>Campos marcados con <span class="rojo">*</span> son obligatorios</p>
        </div>

        <div class="cam">
          <label class="etiquet" for="nickname">Nombre <span class="rojo">*</span></label>
          <input required class="etiqueta1" type="text" name="nombre" id="" placeholder="">
          <br>

          <label class="etiquet" for="titulo">Email <span class="rojo">*</span></label>
          <input required class="etiqueta1" type="text" name="correo" id="" placeholder="">
          <br>

          <label class="etiquet" for="comentario">Comentario <span class="rojo">*</span></label>
          <textarea class="etiqueta2" name="comentario" required></textarea>
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