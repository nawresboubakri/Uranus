<?php
function sms()
{
  require $_SERVER['DOCUMENT_ROOT'] . '/sms/vendor/autoload.php' ; 
  $MessageBird = new \MessageBird\Client('33G9IFZZC8kfsPFtsXsWI9311') ; 
  $Message = new \MessageBird\Objects\Message() ; 
  $Message->originator = 'PointSport' ;
  $Message->recipients = array(+21692169212); 
  $Message->body = 'Test SMS Point sport localserver' ; 
  $MessageBird->messages->create($Message) ;
}
?>