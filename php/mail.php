<?php
$message = $_POST['message'];

$message = htmlspecialchars($message);

$message = trim($message);

$from = "denisdevelop4604@gmail.com";
$subject = "New Contact Form Submission";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: ' . $from . "\r\n" .
    'Reply-To: ' . $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$result = mail($from, $subject, $message, $headers);

if ($result) {
    echo "Письмо успешно отправлено!";
} else {
    echo "Ошибка при отправке письма.";
}
