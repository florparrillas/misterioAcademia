<?php

//Llamo a los campos 
//$nombre = $_POST['nombre'];
//$telefono = $_POST['telefono'];
//$correo = $_POST['correo'];
//$mensaje = $_POST['mensaje'];

//Datos para el correo
//$destinatario = "parrillas.florencia@gmail.com";
//$asunto = "Mensaje desde la Web";



//$carta = "De : $nombre \n";
//$carta .= "Telefono: $telefono \n";
//carta .= "Correo: $correo \n";
//$carta .= "Mensaje: $mensaje \n";

//Enviando Mensaje
//mail($destinatario, $asunto, $carta);
//header('Location:pruebaMagia01.php');

if (isset ($_POST['btnEnviar'])){
    if (!empty ($_POST['nombre']) && !empty($_POST['telefono']) && !empty($_POST['correo']) && !empty($_POST['mensaje'])){
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];    
        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail = mail($nombre, $telefono, $correo, $mensaje);
        if ($mail){
            echo "<h4> Enviado Exitosamente!! </h4>";
        }
    }

}






?>