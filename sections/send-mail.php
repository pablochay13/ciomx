<?php
$name = $_POST['nombre'];
$phone = $_POST['tel'];
$email = $_POST['email'];
$company = $_POST['empresa'];
$asunto = $_POST['msj'];

$html =  "
<h1>Envio libreria PHPMailer</h1>

Nombre: $name<br /> 
Teléfono: $phone<br /> 
Email: $email <br />
Empresa: $company <br />
Mensaje: $asunto <br />
";


if (mail('contacto@ciomx.org', $asunto, $html)) {
  //echo "Correo enviado";
}
