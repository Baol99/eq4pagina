<?php

require "conexion.php";

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$comentario = $_POST['comentario'];


$insertar = "INSERT INTO contacto (nombre, correo, comentario) VALUES ('$nombre','$correo','$comentario')";

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
      text: "Se envio correctamente.",
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
        location.href="contactanos.php";
      })
    });
    </script>';
}
