<?php
require "conexion.php";
require "seguridad.php";


$id = $_GET["id"];

echo $id;

$eliminar = "DELETE FROM usuarios WHERE id='$id'";
$resultado = mysqli_query($conectar, $eliminar);

if ($resultado) {
  header("location:mostrarusuario.php");
} else {
  echo '
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
    <script>
    jQuery(function(){
      swal({
        title: "¡Error!",
        text: "No se pudo ELIMINAR.",
        type: "warning",
        //timer: 3000
      },
      function(){
        location.href="mostrarusuario.php";
      })
    });
    </script>';
}
