<?php
namespace Controller;

require_once('Librerias/Exception.php');
require_once('Librerias/PHPMailer.php');
require_once('Librerias/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class FormularioController {

    public function procesarFormulario() {

    if(!empty($_POST['correo']) && !empty($_POST['nombre']) && !empty($_POST['comentario'])){

        $correo = $_POST['correo'];
        $nombre = $_POST['nombre'];
        $comentario = $_POST['comentario'];

        $mail = new PHPMailer(true);
        try{
                
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->Username = "renevj3@gmail.com";
            $mail->Password = "naoybbualrfunjxh ";
            $mail->CharSet = 'UTF-8';

            $mail->setFrom("renevj3@gmail.com",'De');
            $mail->addAddress("renevj3@gmail.com",'Para');//A donde se enviará el correo

            $mail->isHTML(true);
            $mail->Subject = "Informacion Libros";

            $mail->Body = "
            Reservacion: <strong>{$nombre}</strong> <br/>
            email: <strong>{$correo}</strong> <br/>
            Comentario: <strong>{$comentario}</strong>
            ";
            
            $mail->send();

            echo "
                 <div class='alert alert-success' role='alert'>
                    Correo enviado, te estaremos contactando.
                </div>
            ";
        }catch(Exception $e){
            echo "Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Error";
    }
}
}

?>