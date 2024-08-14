<?php
if{(isset($_post['submit']))
$name = $_post['name'];
$Visitor_email = $_get['email'];
$subject = $_post['subject'];
$message = $_post['message'];

$email_from= "info@resungajal.com.np";

$email_subject= 'New Form Submission';

$email_body ="User Name: $name. \n".
"User Email: $Visitor_email. \n".
"Subject: $subject. \n".
"User Message: $message. \n";
$to= "jalresunga@gmail.com" ;
 $header ="From: $email_from \r\n";

 $header .= "Reply-To: $visitor_email \r\n";

 mail($to,$email_subject,$email_body,$headers);

 header ("Location: contact.html")
}








?>