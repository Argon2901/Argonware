<?php
declare (strict_types=1);

$ini = parse_ini_file(".ini");
/**
 * Recieves information from a contact post and emails it to my email.
 */
function send_message(string $message, string $email, string $phone): int{
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-type: text/html; charset=UTC-8";
    $headers[] = "TO: " . $ini["email"]["name"] . " <" . $ini["email"]["email"] . ">";
    $headers[] = "messenger@" . $ini["website"]["url"];
    mail($ini["email"]["email"], "Message from " . $email, $message, $headers);   
}
