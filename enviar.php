<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Formulario</title> <!-- Aquí va el título de la página -->

</head>

<body>
<?php

$Nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$Mensaje = $_POST['Mensaje'];
$Telefono = $_POST['Subject'];

if ($Nombre=='' || $Correo=='' || $Mensaje==''){
    echo "<script>alert('Los campos marcados con * son obligatorios $Nombre $Correo $Mensaje ');location.href ='javascript:history.back()';</script>";
}else{
    $to      = 'info@taiao.com.ec';
    $subject = "Mensaje de pagina web hostalquito.com $Telefono";
    $message = "Nombre: $Nombre \n".
    "Email: $Correo \n".    
    "Mensaje: $Mensaje \n";
    $headers = 'From: Taiao Web' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

     $hola = mail($to, $subject, $message, $headers);

    if ($hola){
        echo "<script>alert('To correo fue enviado, pronto tenderemos una respuesta');</script>";
        echo "<script> window.location.href = 'http://www.taiao.com.ec';</script>";
    }
    else
        echo "<script>alert('Error al enviar el formulario');</script>";
}

?>
</body>
</html>