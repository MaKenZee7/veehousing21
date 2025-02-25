<?php
$name = $_POST['clientName']
$visitor_email = $_POST['checkIn']
$subject = $_POST['checkOut']

$email_from ='info@veehousing21@gmail.com',

$email_subject 'New form submission'

$email_body = "user name: $name.\n"
                 "user_email: $visitor_email.\n"
                    "subject: $subject.\n";

$to = 'leondaviseso@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "reply_to: $visitor_email \r\n";


mail($to,$email_subject ,$email_body,$headers)
header("Bookings.html")
                 

?>