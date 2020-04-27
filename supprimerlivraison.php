<?php
include "../../core/commandeF.php";
$livraisonF=new livraisonF();
if (isset($_POST["num_livraison"])){
    echo $_POST["num_livraison"];
	$livraisonF->supprimerli($_POST["num_livraison"]);
	header('Location: table-panier.php');
}
?>