<?php

include "../../core/commandeF.php";
$commandeF=new commandeF();
if (isset($_POST["ref_cmd"])){
	$commandeF->supprimercom($_POST["ref_cmd"]);
	header('Location: table-panier.php');
}
?>