<?php
function Send_Mail($to, $subject, $body) {
	require 'phpmailer/PHPMailerAutoload.php';
	$from = "manageppp@gmail.com";

	$mail = new PHPMailer();
	$mail->isSMTP(true); // use SMTP
	$mail->Host = "smtp.gmail.com"; // SMTP host
	$mail->SMTPSecure = "ssl";
	$mail->Port = 465; // set the SMTP port
	$mail->SMTPAuth = true; // enable SMTP authentication
	$mail->isHTML(true);
	$mail->Username = "manageppp@gmail.com"; // SMTP  username
	$mail->Password = "Manage123"; // SMTP password

	$mail->setFrom($from, 'ManageYourTime');
	$mail->Subject = $subject;
	$mail->MsgHTML($body);
	$mail->addAddress($to);
	$mail->send();
	$msg = "Registro completo, por favor, active su email.";
}
?>