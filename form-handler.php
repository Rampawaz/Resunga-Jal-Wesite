<?php

$name = $_GET['name'];
$Visitor_email = $_GET['email'];
$subject = $_GET['subject'];
$message = $_GET['message'];

$email_from= 'info@resungajal.com.np';

$email_subject= 'New Form Submission';

$email_body ="User Name: $name. \n".
"User Email: $Visitor_email. \n".
"Subject: $subject. \n".
"User Message: $message. \n";
$to= 'jalresunga@gmail.com' ;
 $header ="From: $email_from \r\n";

 $header .= "Reply-To: $visitor_email \r\n";

 mail($to,$email_subject,$email_body,$headers);

 header ("Location: contact.html")









?>