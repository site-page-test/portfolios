<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected image texts from the request
    $selectedImages = $_POST["selectedImages"];

    // Your email address where you want to receive the selected images
    $to = "your@email.com";

    // Subject of the email
    $subject = "Selected Images";

    // Compose the email message
    $message = "The user selected the following images:\n\n";
    $message .= $selectedImages;

    // Set additional headers
    $headers = "From: your@email.com" . "\r\n" .
               "Reply-To: your@email.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        http_response_code(200); // OK
    } else {
        http_response_code(500); // Internal Server Error
    }
} else {
    http_response_code(405); // Method Not Allowed
}
?>


