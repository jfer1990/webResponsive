<?php
$para = 'jfer1990@gmail.com';
$asunto = 'Mensaje desde el blog';
$mailheader = "From ".$_POST["email"]."\r\n";
$mailheader .= "Reply-To ".$_POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=utf-8\r\n";
$MESSAGE_BODY = "Nombre: ".$_POST["name"]."\n";
$MESSAGE_BODY .= "\n<br>Email: ".$_POST["email"]."\n";
$MESSAGE_BODY .= "\n<br>Message: ".nl2br($_POST["message"])."\n";


mail($para,$asunto,$MESSAGE_BODY, $mailheader) or die('Error al enviar el mail');
header('Location')


?>