<?php

// Contact subject
$subject ="Message from website"; 

// Details
$message="$message";

// Mail of sender
$mail_from="$email"; 

// From 
$header="from: $name <$mail_from>";

// Enter your email address
$to ='majidnaviwala@gmail.com';
$send_contact=mail($to,$subject,$message,$header);

// Check, if message sent to your email 
// display message "We've recived your information"
if($send_contact){
	echo "Thank you for contacting me. I'll reply as soon as possbile";
}
else {
	echo "Error sending message. Please try again.";
}
?>