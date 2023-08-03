<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    $asunto = $_POST["asunto"];

    $destinatario = "josemanuelmartinezdiaz@gmail.com";
    $asunto = "Nuevo mensaje de contacto de $nombre - "  + $asunto;
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje\n";

    // Envía el correo
    $headers = "From: $email\r\n";
    if (mail($destinatario, $asunto, $cuerpoMensaje, $headers)) {
        echo "El mensaje ha sido enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
}
?>

