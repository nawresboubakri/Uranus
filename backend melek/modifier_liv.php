<?php
include "../../entities/livraison.php";
include "../../core/commandeF.php";

if (isset($_POST['modifier'])){
    $livraisonF=new livraisonF();
	$livraison=new livraison($_POST['ref_cmd'],$_POST['destination'],$_POST['code_postal'],$_POST['periode_arrivee'],$_POST['mode_payement']);
    $livraisonF->modifierli($livraison,$_POST['reference']);

	header('Location: table-panier.php');
}
?>