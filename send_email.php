<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Recipient email (your email where you want to receive the messages)
    $to = "recipient@example.com";  // Replace with your actual email

    // Subject of the email
    $subject = "New Contact Form Submission";

    // Email body content
    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        // Email sent successfully
        echo "Message sent successfully!";
    } else {
        // Email failed to send
        echo "Failed to send the message. Please try again later.";
    }
} else {
    // If form wasn't submitted properly, redirect back to the form
    header("Location: contact.php");  // Redirect back to the form page if accessed directly
    exit();
}
?>
