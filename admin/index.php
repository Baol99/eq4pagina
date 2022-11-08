

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Incio</title>
</head>

<body>

  <div class="prueba">
    <form action="usuario.php" method="post">
      <div id="formu1">
        <h1>Login</h1>

        <?php
            $errorusuario = isset($_GET["errorusuario"]);
            if ($errorusuario == "SI") {
              echo '<h3 class="aviso">Datos incorrectos</h3>';
            }
            ?>

          <div class="form">
            <div class="item">
                  <input class="item" type="text" placeholder="Usuario" name="usuario">
            </div>

            <div class="item">
                    <input class="item" type="password" placeholder="Password" name="contrasena">
            </div>
          </div>

          <input class="btn" type="submit" value="Iniciar sesión" />
          <input class="btn" type="submit" value="Registrar" />
      </div>
    </form>
  </div>

</body>

</html>
