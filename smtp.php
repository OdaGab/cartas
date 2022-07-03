<?php


// include
require_once( "vendor/autoload.php" );
require_once ("config.php");

// namespace
use \Rain\Tpl;
use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\SMTP;

date_default_timezone_set('Etc/UTC');

//RainTPL

Tpl::configure( $config );
$tpl = new Tpl;
$tpl->assign( "desname", $desname );
$html = $tpl->draw( "register", true );

//phpmailer 
$nome        = utf8_decode( $desname );
$username    = "ti@colegioexato.com.br";
$password    = "Tie1s2c3*";
$name_from   = utf8_decode("Colégio Exato");
$subject     = utf8_decode("Parabéns ") . $nome;

$desname     = utf8_decode( $desname );

//PHPMailer

//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server
$mail->Host = 'mail.colegioexato.com.br';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = $username;
//Password to use for SMTP authentication
$mail->Password = $password;
//Set who the message is to be sent from
$mail->setFrom($username, $name_from);
//Set an alternative reply-to address
$mail->addReplyTo('replyto@example.com', $name_from);
//Set who the message is to be sent to
$mail->addAddress($desemail, $desname);

//Copia Oculta 
$mail->AddBCC('odavita32@gmail.com', 'teste'); 
//$mail->AddBCC('direcao@colegioexato.com.br', 'teste'); 
//$mail->AddBCC('suporte.ti@cervix.com.br', 'teste'); 

//Set the subject line
$mail->Subject = $subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML( $html );
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file

$mail->addAttachment($desname . '.pdf');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Enviada com sucesso !' . '<br>';
}

?>