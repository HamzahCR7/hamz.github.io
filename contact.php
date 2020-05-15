<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];
$email_from='aslamhamzah15@gmail.com';
$email_subject='Form Submission';
$email_body="User Name: $name.\n";
$to='aslamhamzah15@gmail.com';
$headers="Form: $email_from\r\n";
$headers .="Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("contact.html");
?>