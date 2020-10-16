<?php
// require_once 'mailerClass/class.php';
 require_once 'mailerClass/PHPMailerAutoload.php';
 
 $mail = new PHPMailer;
 
 //Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
	
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
//Password to use for SMTP authentication
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
require_once 'emailpass.php';

//Set who the message is to be sent from
$mail->setFrom($_POST['from_email'], "Message | Edvicon Web-Portal");




//Set the subject line
$mail->Subject = $_POST['subject'];

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
	$logo = 'https://cdn-images-1.medium.com/fit/c/189/47/1*eLiGz6dKURfpMDl6_tZGIA.png';
    $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Edvicon Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt='' width='15%'></a><br><hr width='100%'> <br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$_POST['name']}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$_POST['from_email']}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$_POST['subject']}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$_POST['message']}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";
$mail->Body = $body;

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
$mail->isHTML(true);  
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
header("Location: ../contact.php");

 
?>