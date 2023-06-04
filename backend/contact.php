<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'sawon17081997@gmail.com'; // Replace with your email address
    $subject = 'New message from contact form';
    $email_content = "Name: $fullname\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $email_content, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>
