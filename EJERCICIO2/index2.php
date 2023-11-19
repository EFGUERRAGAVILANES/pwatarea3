<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

   
    $destinatario = "tudirecciondeemail@example.com";
    $asunto = "Nuevo mensaje de contacto";
    $contenido = "Nombre: $nombre\nCorreo Electrónico: $email\nMensaje: $mensaje";
    mail($destinatario, $asunto, $contenido);

    
    header("Location: gracias.html");
}
?>
