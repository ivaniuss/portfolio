<?php

if (isset($_POST['enviar'])){
    if (!empty($_POST['name']) && !empty($_POST['subject']) 
        && !empty($_POST['email']) && !empty($_POST['message'])){
            $name = $_POST['name'];
            $msg = $_POST['message'];
            $email = $_POST['email'];
            $asunto = $_POST['subject'];
            $header = "From: $email" . "\r\n";
            $header = "Reply-To: ivan.emi94@gmail.com" . "\r\n";
            $header = "X-Mailer: PHP/" . phpversion();
            $mail = @mail($email,@$asunto,@msg,@header);
            if($mail){
                echo "<h4> !Mail enviado exitosamente!<h4>"
            }
        }
}
