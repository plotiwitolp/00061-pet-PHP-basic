<?php
if ($_POST['capcha'] != 12) {
    header('location: 6-10les.php');
    exit;
}
if ($_POST['subject'] == 1) {
    $subject = 'Вопрос 1';
} elseif ($_POST['subject'] == 2) {
    $subject = 'Вопрос 2';
} elseif ($_POST['subject'] == 3) {
    $subject = 'Вопрос 3';
} else {
    $subject = 'Вопрос';
}

$to = 'j-c-mail@mail.ru';
$from = trim($_POST['email']);

$message = htmlspecialchars($_POST['message']);
$message = urldecode($message);
$message = trim($message);

$headers = "From: $from" . "\r\n" .
    "Reply-To: $from" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo 'Письмо отправлено';
} else {
    echo 'Ошибка отправления письма';
}
