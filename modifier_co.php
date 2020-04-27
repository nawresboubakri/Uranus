<?php
include "../../entities/commandes.php";
include "../../core/commandeF.php";

if (isset($_POST['modifier'])){
    $commandeF=new commandeF;
	$commandes=new commandes($_POST['ref_prod'],$_POST['username'],$_POST['categorie'],$_POST['prix_total'],$_POST['jour_arrivee'],$_POST['mod_paiement']);
    $commandeF->modifiercomm($commandes,$_POST['reference']);
	
	header('Location: table-panier.php');
}
?>