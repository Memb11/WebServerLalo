<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $nombre = $_POST ['nombre'];
        $asunto = $_POST ['asunto'];
        $email = $_POST ['email'];

        $destinatario = "correoselomar@gmail.com"

        $contenido = "Nombre: $nombre\nCorreo: $correo\nMensaje: $mensaje";

        mail($destinatario, $asunto, $contenido);

    }


?>