<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    $position = strip_tags(trim($_POST["position"]));
    $message = strip_tags(trim($_POST["message"]));

    if (empty($name) || empty($email) || empty($phone) || empty($position)) {
        http_response_code(400);
        echo "Please complete all required fields.";
        exit;
    }

    $recipient = "team@centralcityfc.com";
    $subject = "New Player Registration from $name";
    
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Preferred Position: $position\n";
    $email_content .= "Message:\n$message\n";

    $email_headers = "From: $name <$email>";

    if (mail($recipient, $subject, $email_content, $email_headers)) {
        http_response_code(200);
        echo "Thank you! Your registration has been submitted.";
    } else {
        http_response_code(500);
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }

} else {
    http_response_code(403);
    echo "There was a problem with your submission. Please try again.";
}
?>