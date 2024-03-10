<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@university.com' // input valid domain name here

$email_subject = 'New Form Submission'

$emaio_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n"
              "Subject: $subject.\n".
              "User Message: $message.\n";

$to = 'adarsh.bhartimusa2012@gmail.com' // my email address

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");
?>