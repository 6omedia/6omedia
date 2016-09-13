<?php

header('Content-Type: application/json');

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$bodyMsg = 'Name: ' . $name . "\r\n" .
		   'Email: ' . $email . "\r\n" .
		   'Contact: ' . $contact;

// Send email

//$smtp_server = "mail.addoeducation.co.uk";
//$username = "mail@addoeducation.co.uk";
//$password = "nXtM$QYHR&4>4";

//$from = ['mail@addoeducation.co.uk' => 'Addo Education'];
//$test1 = ['hello@addoeducation.co.uk' => 'Addo Education'];

require_once('config.php');

try {

	$message = Swift_Message::newInstance()
		->setSubject('6o Media Enquiry')
		->setFrom($from)
		->setTo($to)
		->setBody($bodyMsg);

	$transport = Swift_SmtpTransport::newInstance($smtp_server, 25)
		->setUsername($username)
		->setPassword($password);

	$mailer = Swift_Mailer::newInstance($transport);
	$result = $mailer->send($message);

	if($result){
		$responseArray['success'] = '1';
		echo json_encode($responseArray);
	}else{
		$responseArray['success'] = '0';
		echo json_encode($responseArray);
	}

}catch(Exception $e){
	echo json_encode($e->getMessage());
}

?>