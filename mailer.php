<?php
if(isset($_POST['submit'])) {

	$to = "erik.james.bennett@gmail.com"; 
	$subject = "Contact Form on Portfolio Website";
	$name_field = $_POST['name'];
	$email_field = $_POST['email'];
	$org_field = $_POST['org'];
	$message = $_POST['message'];
	
	$body = "From: $name_field\n E-Mail: $email_field\n Organization: $org_field\n Message:\n $message\n";

	echo "Data has been submitted to $to!";
	mail($to, $subject, $body);
	
} else {
	echo "blarg!";
}
?>