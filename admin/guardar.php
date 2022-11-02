<?php

require "conexion.php";
require "seguridad.php";


$rutatemporal = $_FILES['imagen']['tmp_name'];

$rutaservidor = 'fotos';
$nombreimagen = $_FILES['imagen']['name'];

$rutadestino = $rutaservidor . '/' . $nombreimagen;

move_uploaded_file($rutatemporal, $rutadestino);
date_default_timezone_set('UTC');
$nombreimagenUnico = date('Y-m-d-h:i:s') . "-" . $nombreimagen;


$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$precio = $_POST['precio'];
$detalle = $_POST['detalle'];


$insertar = "INSERT INTO `paquetes` (`ruta`,`nombre`, `categoria`, `precio`, `detalle`) VALUES ('$rutadestino','$nombre','$categoria','$precio','$detalle')";

//validar usuario

$verficar_usuario = mysqli_query($conectar, "SELECT * FROM paquetes WHERE nombre = '$nombre' ");
if (mysqli_num_rows($verficar_usuario) > 0) {

  echo '
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>
  jQuery(function(){
    swal({
      title: "¡Error!",
      text: "Este paquete ya esta registrado. Por favor intentelo de nuevo.",
      type: "error",
      //timer: 3000
    },
    function(){
      location.href="agregar.php";
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
      text: "Este paquete se registro correctamente.",
      type: "success",
      //timer: 3000
    },
    function(){
      location.href="panel.php";
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
        location.href="agregar.php";
      })
    });
    </script>';
}
