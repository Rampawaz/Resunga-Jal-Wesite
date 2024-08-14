<?php
if{(isset($_get['submit']))
$name = $_get['name'];
$Visitor_email = $_get['email'];
$subject = $_get['subject'];
$message = $_get['message'];

$email_from= "info@resungajal.com.np";

$email_subject= 'New Form Submission';

$email_body ="User Name: $name. \n".
"User Email: $Visitor_email. \n".
"Subject: $subject. \n".
"User Message: $message. \n";

 $header ="From: $email_from \r\n";

 $header .= "Reply-To: $visitor_email \r\n";

 mail($to,$email_subject,$email_body,$headers);

 header ("Location: contact.html")
}








?>