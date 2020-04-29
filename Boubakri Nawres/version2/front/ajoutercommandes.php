<?php
include "../../entities/commandes.php";
include "../../core/commandeF.php";
if(isset($_GET['ref_prod']) and isset($_GET['username']) and isset($_GET['categorie']) and isset($_GET['prix_total']) and isset($_GET['jour_arrivee']) and isset($_GET['mod_paiement']))
{

  $commandes1=new commandes($_GET['ref_prod'],$_GET['username'],$_GET['categorie'],$_GET['prix_total'],$_GET['jour_arrivee'],$_GET['mod_paiement']);
  $commande1F=new commandeF();
$commande1F->ajouter_commande($commandes1);

header('Location: shoping-cart.php');
	
}
?>