<?php
          //include "sms.php";

$body=$_POST['email'] ; 
$to=$_POST['usermailing'] ; 
$a="Reponse a votre réclamation ";
$b=$_POST['ref'];
$subject=$a.$b;
if (mail($to, $subject, $body, 'From: serviceclients.sport@gmail.com'))
{
	//sms() ; 
	$message = "Email Sent , The USER has been notified by SMS";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else 
echo "<script type='text/javascript'>'Mail not sent';</script>";
	header('Location: table-service.php');

?>