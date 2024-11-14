<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "phillipnozil@gmail.com";
    $headers = "From: $email";

    $fullMessage = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\nMessage:\n$message";
    
    mail($to, $subject, $fullMessage, $headers);
    header("Location: thank_you.html");
    exit;
}
?>
