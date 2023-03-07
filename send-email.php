<?php
if (isset($_POST['submit'])) {
    // Email settings
    $to = "ansharora2802@gmail.com";
    $subject = "New message from contact form";
    $message = "Name: " . $_POST['name'] . "\r\nEmail: " . $_POST['email'] . "\r\nMessage: " . $_POST['message'];

    // Headers
    $headers = "From: ansharora2802@gmail.com" . "\r\n" .
        "Reply-To: ansharora2802@gmail.com" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for contacting us!";
    } else {
        echo "Error: Message not sent";
    }
}
?>