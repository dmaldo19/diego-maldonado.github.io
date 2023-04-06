<?php
// Recuperar los datos del formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Crear el mensaje de correo electrónico
$asunto = "Mensaje del formulario de contacto";
$contenido = "Nombre: $nombre\nTeléfono: $telefono\nCorreo: $correo\nMensaje: $mensaje";

// Enviar el correo electrónico
mail('dmaldo19@gmail.com', $asunto, $contenido);

if(mail('dmaldo19@gmail.com', $asunto, $contenido)) {
    echo 'El correo se ha enviado correctamente.';
} else {
    echo 'Error al enviar el correo.';
}


// Redirigir a una página de confirmación
header('Location: Contacto.html');
?>