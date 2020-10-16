<?php

//Don't change --start
	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = "edviconedu";
	$Username = "edviconedu";
	
	//Password to use for SMTP authentication
	$mail->Password = "Nim@Edvicon.2020";
//Dont change --end

	
	//Email receiving account
	$mail->addAddress('info@edvicon.org', 'Info');
	$mail->addReplyTo($_POST['from_email'], $_POST['name']);
?>