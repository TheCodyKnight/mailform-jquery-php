<?php

//README: if you want to use this code for your website, add your mail-address in line 11 in a format like this:
//  $to = "artorias-the-abysswalker@prepare-to-die.com";

$name = $_POST["name"];
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$message = $_POST["msg"];

// Send email

$to = "";

$subject = "Contact Form: $name";
$message = "$message";
$headers = "From: $email";

mail($to, $subject, $message, $headers);

?>
