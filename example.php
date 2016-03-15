<?php
	
	include('sparkpost-api.php');
	
	
	$mail = new sparkPostApi('https://api.sparkpost.com/api/v1/transmissions','<YOUR API KEY>');

	$mail-> from(array('email' => 'validated@yourdomain.com','name' => 'Sender Name'));
	$mail-> subject('My First Sparkpost Mail');
	$mail-> html('
		<h1>Mandrill is over</h1>
		<p>Mandrill is now a paid service, let\'s move to sparkpost!</p>
	');
	
	$mail-> setTo(array('person1@yourdomain.com','person2@yourdomain.com'));
	$mail->setReplyTo('youremail@yourdomain.com');
	
	/* CC emails as array same as "seTo"
	//$mail->setCc(array('mail@brainstemstudio.com','mail.brainstemstudio@gmail.com'));

	/* BCC emails as array same as "seTo" */
	//$mail->setBcc(array('mail@brainstemstudio.com','mail.brainstemstudio@gmail.com'));
	
	$mail->send();

	$mail->close();

?>
