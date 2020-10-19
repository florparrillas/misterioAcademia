<?php

if (isset ($_POST['btnEnviar'])){
    if (!empty ($_POST['nombre']) && !empty($_POST['telefono']) && !empty($_POST['correo']) && !empty($_POST['mensaje'])){
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];

        $mensaje =  "Nombre: ".$nombre.PHP_EOL;
        $mensaje .= "Telefono: ".$telefono.PHP_EOL;
        $mensaje .= "Correo: ".$correo.PHP_EOL;
        $mensaje .= "Mensaje: ".$_POST['mensaje'];

        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail = mail('arieel.sommer@gmail.com', 'Asunto', $mensaje, $header);

        header('Location: /gracias.php');
        die();
    }

}


?>