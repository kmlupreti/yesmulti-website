<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set up the recipient email address
    $to = "info@yesmultitrading.com"; // Change this to your email address

    // Set up the email subject
    $subject = $_POST["subject"];

    // Sanitize form input to prevent injection attacks
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Construct the email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Set up the email headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "success"; // You can echo any response you want to handle in your JavaScript
    } else {
        echo "error"; // You can echo any response you want to handle in your JavaScript
    }
} else {
    // If the form is not submitted, return an error
    echo "error"; // You can echo any response you want to handle in your JavaScript
}
?>
