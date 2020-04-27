<?php
  require $_SERVER['DOCUMENT_ROOT'] . '/sms/vendor/autoload.php' ; 
  $MessageBird = new \MessageBird\Client('rbwq3jEpEpBCrLfSomWPy3V6n') ; 
  $Message = new \MessageBird\Objects\Message() ; 
  $Message->originator = 'PointSport' ;
  $Message->recipients = array(+21692900570); 
  $Message->body = 'Test SMS Point sport localserver' ; 
  $MessageBird->messages->create($Message) ;
?>