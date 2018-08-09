<?php
if(!isset($_POST['submit']))
{
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

if(empty($name)||empty($visitor_email))
{
	echo "name and email are mandatory!"
	exit;
}

$email_from = 'art.clgebhart@gmail.com';
$email_subject = "New Form Submission";
$email_body = "From $name.\n".
"$message".

$to = "art.clgebhart@gmail.com";
$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);