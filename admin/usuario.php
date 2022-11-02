<?php
require "conexion.php";

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$comparar = "SELECT * FROM admin WHERE usuario='$usuario' AND contrasena='$contrasena'";


$resultado = mysqli_query($conectar, $comparar);

if (mysqli_num_rows($resultado) > 0) {
  session_start();
  $_SESSION['username'] = $usuario;
  $_SESSION["autentificado"] = "SI";
  header("Location: panel.php");
} else {
  echo '
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>
  jQuery(function(){
    swal({
      title: "¡Error!",
      text: "Por favor, verifica los datos e intenta de nuevo",
      type: "warning",
      //timer: 3000
    },
    function(){
      location.href="index.php?errorusuario=SI";
      // window.location.href = "/";
    })
  });
  </script>';
}


mysqli_free_result($resultado);
mysqli_close($conectar);
