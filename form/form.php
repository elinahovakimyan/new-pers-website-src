<?php

/* Configuration */
/*your web-mail*/
$mailto  = 'elinahovakimyan@gmail.com';

$name     	= strip_tags($_POST['name']);
$email      = strip_tags($_POST['email']);
$msg  			= strip_tags($_POST['message']);
$company  	= strip_tags($_POST['company']);
$note  			= strip_tags($_POST['note']);


$subject = "[Contact Form for Project]";

// // HTML for email to send submission details
// $body = "<br>
// <p><b>Message</b>: $msg</p>
// <p><b>Name</b>: $name <br>
// <b>Email</b>: $email<br>
// ";

// Success Message
$success = "Sent";
$error = "Failed";


$message = "From: $name <$email> \r\n";
$message .= "Company: $company \r\n";
$message .= "Message: $msg \r\n";
$message .= "Note: $note \r\n";
$message .= "Reply-To: $email \r\n";
$headers2 = "From:" . $mailto;
$header = "$subject : $name";


if (mail($mailto, $header, $message)) {
	header("Location: http://elinahovakimyan.com");
} else {
	echo "Error occurred, please go back and try again.";
}
