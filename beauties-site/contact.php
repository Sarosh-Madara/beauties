<?php
	
	$subject = "$subject";
	$message = "$detail";

	$mail_from = "customer_mail";
	$header = "from: $name <$mail_from>";
	$to = "saroshmadara@gmail.com";
	$send_contact
	=mail($to, $subject, $header);
	if(send_contact){
		echo "we have received";
	}else{
		echo "Error";
	}
?>
