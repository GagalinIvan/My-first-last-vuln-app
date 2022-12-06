<?php
// print_r($_POST);
$email = $_POST['email'];
$message = $_POST['message'];

$error = '';
if (trim($email) == '') $error = 'Write email!';
else if (trim($message) == '') $error = 'Write message!';
else if (strlen($message) < 10) $error = 'You wrote very small. Write more!';

if ($error != '') {
	echo $error;
	exit;
}

$subject = "=?utf-8?B?".base64_encode("Test")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

mail('ivanantonovjobs@gmail.com', $subject, $message, $headers);

header('Location: /about.php');
?>