<?php 
	/* use PHPMailer\src\PHPMailer;
	use PHPMailer\src\Exception;
	require_once('PHPMailer/src/PHPMailer.php'); */
	use PHPMailer\PHPMailer\PHPMailer;
	require_once ('PHPMailer/PHPMailer.php');
	//namespace MyPHPMail;
	//class MyPHPMail{
	function sendMailNoReply($rcvadd, $subject, $body){
//	use PHPMailer\Exception;
	
	//echo 'pass2 ';
	$mail = new PHPMailer;
	//echo 'pass3 ';
	 $mail->isSMTP();
	$mail->SMTPAuth();
	$mail->SMTPSecure = 'ssl';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = '465'; 
	//echo 'pass4 ';
	$mail->isHTML();
	$mail->Username = 'nrajhit@gmail.com';
	$mail->Password = 'jonecena';
	$mail->SetFrom('nrajhit@gmail.com');
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress('nrajhit@gmail.com');
	//echo 'pass5 ';
	//$mail->Send();
	if(!$mail->Send()) {
   //echo 'Message could not be sent.';
   //echo 'Mailer Error: ' . $mail->ErrorInfo;
   //exit;
	}
	else{
		
//echo 'Message has been sent';
	}
//	return 12;
	}
	//}
?>
