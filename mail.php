<?php

    //Send form data by email.


    $addressee = 'youremail';

    $institution = $_POST['unit'];
    $name = $_POST['names'];
    $dni = $_POST['document'];
    $docType = $_POST['type'];
    $charge = $_POST['cherge'];
    $character = $_POST['character'];
    $mail = $_POST['mail'];

    $message .= "This message was sent by: " . $name . " \r\n";
    $message .= "Academic unit / Institution: " . $institution . " \r\n";
    $message .= "Name: " . $name . " \r\n";
    $message .= "Document number: " . $dni . " \r\n";
    $message .= "Document type: " . $docType . " \r\n";
    $message .= "Charge/function: " . $charge . " \r\n";
    $message .= "Character: " . $character . " \r\n";
    $message .= "Email: " . $mail . " \r\n";

    $affair = "Form";
    $header = "Form NUE (National University of England)";

    mail($addressee, $affair, utf8_decode($message), $header);  

    echo "<script>alert('Mail sent successfully !!')</script>";
    echo "<script>setTimeout(\"location.href='sent.html'\",1000)</script>";

?>
