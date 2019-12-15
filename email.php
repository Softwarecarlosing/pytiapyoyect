<?php
$to      = '1715110737@utectulancingo.edu.mx';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: infocarloscarmona@gmail.com' . "\r\n" .
    'Reply-To: infocarloscarmona@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>