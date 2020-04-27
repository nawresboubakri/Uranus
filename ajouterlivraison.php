<?php
include "../../entities/livraison.php";
include "../../core/livraisonF.php";
include "../../config1.php";
require $_SERVER['DOCUMENT_ROOT'] .'/nawres/views/backend/vendor/autoload.php';
if(isset($_GET['ref_cmd']) and isset($_GET['destination']) and isset($_GET['code_postal']) and isset($_GET['periode_arrivee'])and isset($_GET['mode_payement']) )
{
  $livraison1=new livraison($_GET['ref_cmd'],$_GET['destination'],$_GET['code_postal'],$_GET['periode_arrivee'],$_GET['mode_payement']);
  $livraison1F=new livraisonF();
$livraison1F->ajouter_livraison($livraison1);
$sql="INSERT INTO notifications (id, name, type, message, status, date , lien) VALUES (NULL, 'livraison', 'ADD', ' livraison has been Added', 'unread', CURRENT_TIMESTAMP, 'table-panier.php');";
		$db = config1::getConnexion();

		try{
      
				        $req=$db->prepare($sql);

            $req->execute();
           
        }
          catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }




  if($_GET['mode_payement']=="espece")
  {
 /* $MessageBird = new \MessageBird\Client('X3EktZDIu5RouqTAkgW8gZUEy ');
  $Message = new \MessageBird\Objects\Message();
  $Message->originator = 'MessageBird';
  $Message->recipients = array(+21652816536);
  $Message->body = 'votre livraison est en cours';
  $MessageBird->messages->create($Message);*/
  header('Location: index.html');
  }
  else{

    header('Location: ajoutPayement.php');
  }

	
}
?>