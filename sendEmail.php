<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "mantas.san@gmail.com";
    $subject = "New Message from $name";
    $headers = "From: $email";

    $mailBody = "Name: $name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Phone: $phone\n\n";
    $mailBody .= "Message:\n$message";

    // Send email
    $success = mail($to, $subject, $mailBody, $headers);

    if ($success) {
        echo "Email sent successfully.";
    } else {
        echo "Error sending email.";
    }
} else {
    echo "Invalid request method.";
}
?>