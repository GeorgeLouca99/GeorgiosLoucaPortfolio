<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "georgelouca755@gmail.com";
    $subject = "New message from $name: $subject";
    $headers = "From: $email";

    $mailBody = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";

    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>

