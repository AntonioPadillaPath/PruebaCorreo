<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$destinatario = "punkstar_ap@hotmail.com";
$asunto = Contacto;

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje \n";

mail($destinatario, $asunto, $carta);
header('Location:gracias.html')


?>