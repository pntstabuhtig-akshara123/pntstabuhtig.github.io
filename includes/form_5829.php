<?php	
	if(empty($_POST['name_5829']) && strlen($_POST['name_5829']) == 0 || empty($_POST['email_5829']) && strlen($_POST['email_5829']) == 0 || empty($_POST['message_5829']) && strlen($_POST['message_5829']) == 0)
	{
		return false;
	}
	
	$name_5829 = $_POST['name_5829'];
	$email_5829 = $_POST['email_5829'];
	$message_5829 = $_POST['message_5829'];
	
	$to = 'aksharatypestudio@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a ATS website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_5829: $name_5829 \nEmail_5829: $email_5829 \nMessage_5829: $message_5829 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: aksharatypestudio@gmail.com\n";
	$headers .= "Reply-To: $email_5829";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>