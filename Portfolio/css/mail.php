<?php
	if (isset($_POST['submit'])) {
		$name = $POST['name'];
		$email = $POST['email'];
		$message = $POST['message'];
		$human = intval($POST['human']);
		$from = 'Contact Form';
		$to = 'chris.wiseman74@gmail.com';
		$subject = 'Message from contact ';
		
		$body = "From: $name\n E-Mail: $email\n Message:\ $message";
		
		//Checking to  see if name is entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		//Verify entered email
		if(!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter email address';
		}
		
		//Verify message entered
		if (!$_POST['message']) {
			$errMessage = 'Enter message';
		}
		
		//Test for bot
		if($human !==5) {
			$errHuman = 'Your not spam';
		}
		
//If no errors , send email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch!</div>';
	}
	else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message.  Try again later!</div>';
	}
}
	}
?>
	
		
