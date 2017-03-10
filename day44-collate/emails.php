<?php

require('class.phpmailer.php');
require('class.smtp.php');
require('mail-config.php');

$mail = new PHPMailer();
$mail->SMTPDebug = 3;

var_dump($mail);

//configuring the connection with the mailserver.
$mail->isSMTP();
$mail->Host = $config['server'];
$mail->SMTPAuth = true;
$mail->Username = $config['username'];			//create an email account
$mail->Password = $config['password'];		//these can all be found in the github repository.
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('sean@teabysean.com', 'Donald Tusk - President of the European Union');
$mail->addAddress('tomomi.suda03@gmail.com', 'Kosta Mexicana'); //the function can be called multiple times to add additional recipients.
$mail->addAddress('r.beerens@protonmail.com', 'Kosta Mexicana'); //the function can be called multiple times to add additional recipients.
$mail->addAddress('ksngho7@gmail.com', 'Kosta Mexicana'); //the function can be called multiple times to add additional recipients.
$mail->addAddress('k.vassos9@gmail.com', 'Kosta Mexicana'); //the function can be called multiple times to add additional recipients.
$mail->addAddress('veljkovickristina021@gmail.com', 'Kosta Mexicana'); //the function can be called multiple times to add additional recipients.
$mail->addAddress('ezequiel.d.orozco@hotmail.com', 'Kosta Mexicana'); //the function can be called multiple times to add additional recipients.


$mail->Subject = 'EVENING GIVEAWAY! FREE EUROPEAN VISAS';
$mail->Body = 'YES!! You are one of the lucky persons to receive free European visa! The ID cards will be handed out to all invitees this evening from 17:30h to 17:45h at Kladrubská, street (Prague 18). Be in time! This is your only opportunity to receive a free VISA! Best Regards, Donald Tusk, President of the European Union.' ;

if ($mail->send()) {
	echo 'email was sent';
} else {
	echo 'email was not sent';
}