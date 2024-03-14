<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Compose email
$to = "alakesh.kalita1025@gmail.com";  // Your email address
$subject = "New message from website";
$body =  "Name: $name\nEmail: $email\nMessage: $message";

// Send email
if (mail($to, $subject, $body)) {
    echo "Message sent successfully!";
} else {
    echo "Error sending message";
}
?>
