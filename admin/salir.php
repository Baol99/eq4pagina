<?php

echo '
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    jQuery(function(){
      swal({
        title: "¡Saliendo!",
        text: "Estas saliendo de la pagina. Sera direccionado a la pagina principal",
        type: "warning",
        //timer: 3000
      },
      function(){
        location.href="index.php";
      })
    });
    </script>';
session_start();
session_destroy();

?>