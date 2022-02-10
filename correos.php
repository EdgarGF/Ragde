<?php
    $destino='soyedgargff@gmail.com';
    $nombre=$_POST['nombre'];
    $compania=$_POST['company'];
    $asunto=$_POST['asunto'];
    $email=$_POST['email'];
    $mensaje=$_POST['mensaje'];

    $header="Enviado desde mi Portafolio";
    $mensajeArmado= $mensaje ."\nAtentamente:" .$nombre .$email;

    mail($destino, $compania, $asunto, $mensajeArmado, $header);
    echo"<script>alert('¡Correo Enviado!')</script>";
    echo"<script>setTimeout(\"location.href='index.html'\",1000)</script>";

?>