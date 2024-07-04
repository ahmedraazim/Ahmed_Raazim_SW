<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up recipient email address
    $to = "raazimramzaan12@gmail.com";

    // Set up email subject and body
    $subject = "Message from Contact Form";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Set up headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Your message has been sent successfully.</p>";
    } else {
        echo "<p>There was an error sending your message. Please try again later.</p>";
    }
} else {
    // Redirect back to the form if accessed directly
    header("Location: index.html");
    exit();
}
?>
