<?php

//llamado de campos

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

//datos para el correo

$destinatario = "josepl1990sat@gmail.com"
$asunto = "contacto desde nuestra web"

$carta = "De: $nombre \n";
$carta .= "Corre: $correo \n";
$carta .= "telefono $telefono \n";
$carta .= "mensaje $mensaje";

//enviando mensaje

mail($destinatario, $asunto, $carta);
header('location:mensaje-enviado.html')

?>