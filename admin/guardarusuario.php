<?php

require "conexion.php";

$nombre = $_POST['nombre'];
$usuarios = $_POST['usuario'];
$contra = $_POST['contra'];

$insertar = "INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `contra`) VALUES (NULL, '$nombre', '$usuarios', '$contra');";

//validar usuario

$verficar_usuario = mysqli_query($conectar, "SELECT * FROM usuarios WHERE usuario = '$usuarios' ");
if (mysqli_num_rows($verficar_usuario) > 0) {

  echo '
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>
  jQuery(function(){
    swal({
      title: "¡Error!",
      text: "Este usuario ya esta registrado. Por favor intentelo de nuevo.",
      type: "error",
      //timer: 3000
    },
    function(){
      location.href="agregarusuario.php";
    })
  });
  </script>';

  exit;
}

$query = mysqli_query($conectar, $insertar);

if ($query) {

  echo '
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>
  jQuery(function(){
    swal({
      title: "¡Listo!",
      text: "Este usuario se registro correctamente.",
      type: "success",
      //timer: 3000
    },
    function(){
      location.href="index.php";
    })
  });
  </script>';
} else {
  echo '
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
    <script>
    jQuery(function(){
      swal({
        title: "¡Error!",
        text: "No se pudo conectar a la base de datos. Revise el archivo conexion.php",
        type: "warning",
        //timer: 3000
      },
      function(){
        location.href="agregarusuario.php";
      })
    });
    </script>';
}
