<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class Mail {

    public function enviarCorreoRecordarContraseña($nombre, $apellidos, $correo, $mensaje, $tipo) {
        require 'vendor/autoload.php';

        $mail = new PHPMailer(true);
        $exito = false;
        try {
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPSecure = 'tls';
            $mail->SMTPAuth = true;
            $mail->Username = "pruebaswebufps@gmail.com";
            $mail->Password = "kakaroto1494";
            $mail->setFrom('palo1493@gmail.com','Proyecto Web');
            $mail->addAddress($correo);
            $mail->isHTML(true);

            $mail->Subject = 'Recordar Clave de Proyecto Web'; //asunto

            $mail->Body = $this->plantillaMensaje($nombre, $apellidos, $mensaje, $tipo); //mensaje

            $mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));

            $exito = $mail->send(); //enviar    
        } catch (Exception $e) {
            throw new Exception('No lograste enviar el correo ');
        }
        return $exito;
    }

    public function plantillaMensaje($nombre, $apellidos, $mensaje, $tipo) {
        $plantilla = '<div style=" padding: 2rem 1rem;background: #e9ecef;border-radius: 3em;width: 80%;display: block;margin: auto;border: 2px double #343a40;">
          <h1 style=" font-family:arial;font-size: 40px;color: black; ">¡ Hola, ' . $nombre .' '. $apellidos . ' !</h1>
          <p style="font-size: 20px;color: black;">Has solicitado recordar tu contraseña del Proyecto Web.</p>
          <hr>
          <p style="font-size: 20px;color: black;"> Te encuentras registrado como ' . $tipo . ', su contraseña es ' . $mensaje . '<br><br> Para mayor seguridad, le recomendamos eliminar este mensaje o cambiar la contraseña desde el sitio.</p>
          <a style="font-size: 30px;background: #343a40;padding: 2px;text-decoration: none;width: 50%;border-radius: .3rem;color: white;font-family: arial;display: block;margin: auto;text-align: center;" href="http://localhost/Proyecto_Web/Inicio" role="button">Ir al Sitio</a>
        </div>';
        return $plantilla;
    }

}
