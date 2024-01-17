<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Aquí puedes procesar los datos como desees, por ejemplo, enviar un correo electrónico.
    
    // En este ejemplo, solo imprimimos los datos.
    echo "Nombre: $nombre<br>";
    echo "Email: $email<br>";
    echo "Mensaje: $mensaje<br>";
} else {
    // Si alguien intenta acceder directamente a este script, redirigir o manejar según sea necesario.
    echo "Acceso no permitido";
}

try {
//Load Composer's autoloader
require 'PHPMailer/PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'PHPMailer/PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer/PHPMailer-master/PHPMailer-master/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'confiabilidadindustrial.cl';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'administrador@confiabilidadindustrial.cl';                     //SMTP username
    $mail->Password   = 'bago2024';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('administrador@confiabilidadindustrial.cl'); //Quien envia el correo
    $mail->addAddress('correosaile@gmail.com', 'M.M');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Asunto Test';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>'

    $mail->send();
    echo 'Enviado correctamente';
} catch (Exception $e) {
    echo "Error al enviar: {$mail->ErrorInfo}";
}
?>