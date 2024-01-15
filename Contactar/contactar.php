<?php
    //destinatario
    $destinatario = 'correoselomar@gmail.com'

    $nombre = $_POST ['nombre'];
    $asunto = $_POST ['asunto'];
    $email = $_POST ['email'];

    $header = "Enviado desde la página de Confiabililidad Industrial"
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\", 1000)</script>";
?>