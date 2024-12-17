<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "jhonmaicolfelix321@gmail.com"; // Reemplaza con tu correo electrónico
    $subject = "Nuevo mensaje desde tu sitio web";
    $body = "Nombre: $name\nCorreo: $email\nMensaje:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "¡Mensaje enviado con éxito!";
    } else {
        echo "Hubo un error al enviar el mensaje. Intenta nuevamente.";
    }
} else {
    echo "Método no permitido.";
}
?>
