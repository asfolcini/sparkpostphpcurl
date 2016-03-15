<?php
	
	include('sparkpost-api.php');
	
	
	$mail    = new sparkPostApi('https://api.sparkpost.com/api/v1/transmissions','dcc5c88ebac748da3cad37cec0e45c49ca6ec8b2');

	$mail   -> from(array('email' => 'validated@brainstemstudio.com','name' => 'BrainstemStudio'));
	$mail   -> subject('My First Sparkpost Mail');
	$mail   -> html('
		<h1>Mandrill is over</h1>
		<p>Mandrill is now a paid service, let\'s move to sparkpost!</p>
	');
	
	$mail   -> setTo(array('mail@brainstemstudio.com','mail.brainstemstudio@gmail.com'));
	$mail->setReplyTo('mail@brainstemstudio.com');
	

	//$mail->setCc(array('mail@brainstemstudio.com','mail.brainstemstudio@gmail.com'));


	//$mail->setBcc(array('mail@brainstemstudio.com','mail.brainstemstudio@gmail.com'));
	
	$mail->send();

	$mail->close();

?>