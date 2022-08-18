<?php
    $destinatario = 'baal.1315771087@gmail.com';
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;
    mail($destinatario,$asunto, $mensajeCompleto);

?>