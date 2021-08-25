<?php
if(!isset($_POST['submit']))
{
	header('Location:error.php');
}

else
{
	header('Location:thankyou.php');
}

$fName = $_POST['firstName'];
$lName = $_POST['lastName'];
$eMail = $_POST['email'];
$contactMessage = $_POST['message'];

if(empty($fName)||empty($lName)||empty($eMail)||empty($contactMessage))
{
	echo "Fields are empty";
	exit;
}

$email_from = 'info@abditory.tk';
$email_subject = "New message from Abditory";
$email_body = "You have received a new message from the user $fName. \n".
				"First Name: $fName \n".
				"Last Name: $lName \n".
				"E-mail: $eMail \n".
				"Message:\n $contactMessage \n";
$to = "info@abditory.tk";
$headers = "From: $email_from \r\n";
$headers = "Reply to: $eMail \r\n";

mail($to,$email_subject,$email_body,$headers);




?> 
	 
