<?php

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];


// Datos para el correo
$destinatario = "infocarloscarmona@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "Contacto desde nuestra web";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');

?>