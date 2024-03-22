<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Create email body
$mailBody = "Name: $name\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";

// Your email address where you want to receive messages
$to = 'ilyaopanasenko4@gmail.com';

// Email headers
$headers = "From: $email";

// Send email
if(mail($to, $subject, $mailBody, $headers)) {
    echo "Message sent successfully!";
} else {
    echo "Failed to send message. Please try again later.";
}
?>