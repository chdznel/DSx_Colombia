<?php
   ini_set( 'display_errors', 1 );
   error_reporting( E_ALL );    echo "The email message was sent.";

if($_POST["submit"]) {
    $recipient="calvarez1@udi.edu.co";
    $subject="Prueba de DSxC";
    $sender=$_POST["email"];
    $senderEmail=$_POST["email"];
    $message=$_POST["email"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Listo, ya estás registrado</p>";

}
    echo "The email message was sent.";
);
?>
