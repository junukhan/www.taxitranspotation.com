<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Specify the recipient email address
    $to = "junuk886@gmail.com"; // Replace with the actual recipient's email address

    // Subject and message for the email
    $subject = "New Contact Form Submission";
    $messageBody = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send the email
    mail($to, $subject, $messageBody);

    // Redirect back to the thank you page or any other page
    header("Location: thank-you.html"); // Replace with your desired redirect URL
    exit();
}
?>
