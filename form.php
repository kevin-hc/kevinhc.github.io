<?php
  $to = 'kevin.herrera.centellas@gmail.com'; // Dirección de correo electrónico de destino
  $subject = 'Mensaje del formulario de contacto';
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Envío del correo electrónico
  mail($to, $subject, $message, $headers);
?>
