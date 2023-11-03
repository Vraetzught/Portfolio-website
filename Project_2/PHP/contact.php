<?php
    $naam = $_POST["naam"];
    $voornaam = $_POST["voornaam"];
    $email = $_POST["emailadress"];
    $skill = $_POST["skillSelect"];
    $message = $_POST["textContent"];

    $to = "info@nb-portfolio.be"; 

    $email_subject = "New contact request submitted by $voornaam $naam";

    $headers =  "From: $email" . "\r\n" .
                "Reply-To: $email" . "\r\n" .
                "X-Mailer: PHP/" . phpversion();
    
    $message_body = "Naam: $naam\n";
    $message_body .= "Voornaam: $voornaam\n";
    $message_body .= "E-mail: $email\n";
    $message_body .= "Skills interesse: $skill\n";
    $message_body .= "Bericht:\n$message";

    if (mail($to, $email_subject, $message_body, $headers)) { 
        echo "Bedankt voor uw bericht. We nemen zo snel mogelijk contact met u op.";
    } else {
        echo "Er is een probleem opgetreden bij het verzenden van het bericht. Probeer het later opnieuw.";
    }
?>
