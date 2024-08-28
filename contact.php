<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $to = "your-email@example.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Check if the email is valid
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Attempt to send the email
        if (mail($to, $subject, $body, $headers)) {
            echo "Your message has been sent successfully!";
        } else {
            echo "There was a problem sending your message. Please try again.";
        }
    } else {
        echo "Invalid email address. Please enter a valid email.";
    }
}
?>
