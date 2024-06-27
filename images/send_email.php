<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Recipient Email Address (your email address)
    $to = "sabelo.ndlovu@umuzi.org";

    // Subject of the email
    $subject = "Message from Portfolio Contact Form";

    // Compose the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Set headers
    $headers = "From: $name <$email>";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        // If mail is sent successfully, redirect back to the contact page with a success message
        header('Location: index.html#contact?message=sent');
    } else {
        // If there is an error in sending mail
        echo "Failed to send message. Please try again.";
    }
} else {
    // If the form is not submitted
    echo "Form submission error.";
}
?>
