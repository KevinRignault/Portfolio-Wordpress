<?php 
require_once '../functions.php';

/*
 * DATAS TO SEND
 * 
 * $contact_nom
 * $contact_email
 * $contact_message
 * 
 */

//-- HEADERS
$headers = 'From: '.$contact_email."\r\n".
	'Reply-To: '.$contact_email."\r\n".
	'X-Mailer: PHP/'.phpversion();
$headers  .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";

//-- MESSAGE
$final_message = 'Bonjour Kévin, <br>
<br>
Ce mail a été envoyé par : '.ucwords($contact_nom).' <br>
<br>
Son mail : '.$contact_email.' <br>
<br>
Son message : '.stripslashes($contact_message).'
';

//-- SETTINGS
$destinataire = 'contact@kevinrignault.fr'; 
$subject = 'Contact - Kevin Rignault'; 

//-- SEND EMAIL
$success = false;
$code = "00";
if(!isset($contact_message) OR $contact_message == ""){
	$response = "Champ message manquant.";
	$code = "01";
}
else if(!isset($contact_nom) OR $contact_nom == ""){
	$response = "Champ nom manquant.";
	$code = "02";
}
else if(!isset($contact_email) OR $contact_email == ""){
	$response = "Champ email manquant.";
	$code = "03";
}
else {
	$success = mail($destinataire, $subject, $final_message, $headers);
	$response = "Votre message a bien été envoyé.";
}

//-- OUTPUT
if($success){
  outputMessage(true, array("code"=>$code, "response"=>$response));
}
else {
  outputMessage(false, array("code"=>$code, "response"=>$response));
}

?>