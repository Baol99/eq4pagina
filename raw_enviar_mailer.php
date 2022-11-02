4<?php

include "phpmailer/PHPMailerAutoload.php";

$mail = new PHPMailer;

$mail->isSMTP();       
$mail->Host = 'smtp.gmail.com'; 
$mail->Port = 587;   
$mail->SMTPAuth = true;  
$mail->SMTPSecure = 'tls';  
$mail->Username = 'aflorestinal@gmail.com';   
$mail->Password = 'fcbarcelona10';  

$mail->setFrom('aflorestinal@gmail.com', 'Servidor Web');

$mail->addAddress('tinal133@outlook.es', 'Usuario Root');     // Add a recipient

$mail->addReplyTo('aflorestinal@gmail.com', 'Pruebas');

$mail->isHTML(true);   

$mail->Subject = 'Enviado por servidor web Antonio ';

$mail->Body    = '<b>Se suscribio: </b>'.$_POST['nombre']. '<br><b>Con el correo: </b>'.$_POST['registro'];


if(!$mail->send()) {
  echo '
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>
  jQuery(function(){
    swal({
      title: "¡Error!",
      text: "Algo salio mal intenlo de nuevo.",
      type: "warning",
      //timer: 3000
    },
    function(){
      location.href="paquetes.php";
    })
  });
  </script>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {

  echo '
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>
  jQuery(function(){
    swal({
      title: "¡Listo!",
      text: "Gracias por contactarnos, nosotros nos comunicamos contigo a la brevedad.",
      type: "success",
      //timer: 3000
    },
    function(){
      location.href="index.php";
    })
  });
  </script>';
}

?>