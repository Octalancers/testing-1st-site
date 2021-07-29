<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'contact@octalancer.com';  

	// prepare message 
	$body = "You have got a new message from the contact form on your website - Octalancer:
	
	Email:  $_POST[email]
	Name:  $_POST[name]
	Company:  $_POST[company]
	Number:  $_POST[number]
	Number of Videos:  $_POST[selectdropdown]
	Message:  $_POST[message]";

	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	mail($youremail, 'Message from Octalancer', $body, $headers );

} ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Thanks!</title>
</head>
<body>
<p> Thank you! We will get back to you soon.</p>
</body>
</html>