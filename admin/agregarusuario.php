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

  <div class="fo">

    <div class="tit">
      <h1>Agregar Nuevos Usuarios</h1>
      <hr>
    </div>

    <form class="contfor" enctype="multipart/form-data" action="guardarusuario.php" method="post">


      <fieldset>
        <div class="req">
          <p>Campos marcados con <span class="rojo">*</span> son obligatorios</p>
        </div>

        <div class="cam">

          <div class="campos">

            <label class="etiquet" for="nombre">Nombre<span class="rojo">*</span></label>
            <br><br>

            <label class="etiquet" for="usuario">Nombre de Usuario<span class="rojo">*</span></label>
            <br><br>

            <label class="etiquet" for="contra">Contraseña <span class="rojo">*</span></label>
            <br><br>
          </div>

          <div class="campos">

            <input required class="etiqueta1" type="text" name="nombre" id="" placeholder="">
            <br><br>

            <input required class="etiqueta1" type="text" name="usuario" id="" placeholder="">
            <br><br>

            <input required class="etiqueta1" type="text" name="contra" id="" placeholder="">
            <br><br>
          </div>

        </div>

        <input class="btn2" type="submit" value="Enviar" />

      </fieldset>

    </form>
  </div>

</body>

</html>