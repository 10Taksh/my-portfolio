<?php
// Email configuration
$toEmail = 'your.email@example.com'; // Change this to your email

// Get form data
$name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
$email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
$subject = isset($_POST['subject']) ? htmlspecialchars(trim($_POST['subject'])) : '';
$message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

// Validation
$errors = [];

if (empty($name)) {
    $errors[] = 'Name is required';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Valid email is required';
}

if (empty($subject)) {
    $errors[] = 'Subject is required';
}

if (empty($message)) {
    $errors[] = 'Message is required';
}

// If no errors, send email
if (empty($errors)) {
    $emailSubject = "New Contact Form Submission: " . $subject;
    $emailBody = "Name: " . $name . "\n";
    $emailBody .= "Email: " . $email . "\n";
    $emailBody .= "Subject: " . $subject . "\n\n";
    $emailBody .= "Message:\n" . $message;

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($toEmail, $emailSubject, $emailBody, $headers)) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => true,
            'message' => 'Thank you! Your message has been sent successfully.'
        ]);
    } else {
        header('Content-Type: application/json');
        http_response_code(500);
        echo json_encode([
            'success' => false,
            'message' => 'There was an error sending your message. Please try again.'
        ]);
    }
} else {
    header('Content-Type: application/json');
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => implode(', ', $errors)
    ]);
}
exit;
?>
