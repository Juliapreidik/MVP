<?php
    $destino = "juliapreidik@hotmail.com";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    $contenido = "Name: " . $name . "\nE-Mail: " . $email . "\nPhone Number: " . $phone . "\nMessage: " . $message ;
    mail($destino, "Get in Touch", $contenido);
    header("Location: thankyou.html");   
?>    