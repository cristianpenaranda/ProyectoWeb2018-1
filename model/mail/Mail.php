<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mail {

    public function enviarCorreoRecordarContraseña($email, $nombres, $mensaje, $tipo) {
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
            $mail->setFrom('palo1493@gmail.com', 'Grupos Estables y Selecciones - UFPS');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Recordar Clave de Grupos Estables y Selecciones, UFPS'; //asunto
            $mail->Body = $this->plantillaMensaje($nombres, $mensaje, $tipo); //mensaje
            $mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));

            $exito = $mail->send(); //enviar    
        } catch (Exception $e) {
            throw new Exception('No lograste enviar el correo ');
        }
        return $exito;
    }

    public function plantillaMensaje($nombres, $mensaje, $tipo) {
        $plantilla = '<!DOCTYPE html>    
        <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        </head>
        <body>
        <div style=" padding: 2rem 1rem;background: #e9ecef;border-radius: .3rem; ">
          <h1 style=" font-family:arial;font-size: 40px;color: black; ">Hola, ' . $nombres . ' </h1>
          <p style="font-size: 20px;color: black;">Ha solicitado recordar su contraseña del Sitio Web Grupos Estables y Selecciones, UFPS.</p>
          <hr>
          <p style="font-size: 20px;color: black;"> Te encuentras registrado como ' . $tipo . ', su contraseña es ' . $mensaje . '; Para mayor seguridad, le recomendamos eliminar este mensaje o cambiar la contraseña desde el sitio.</p>
          <a style="font-size: 30px;display: block;background: #007bff;padding: 2px;text-decoration: none;width: 120px;border-radius: .3rem;color: white;font-family: arial;" href="http://localhost/Proyecto_Bases/Inicio" role="button">Ir al Sitio</a>
        </div>
</body>
</html>
';
        return $plantilla;
    }

}
