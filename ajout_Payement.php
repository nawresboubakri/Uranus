<?php

$_SESSION['adresse'] = 'melek.abid@esprit.tn';
?>
<?PHP
include "../../entities/payement.php";
include "../../core/payementC.php";

		  
	  
if (isset($_GET['nom_carte']) and isset($_GET['num_carte']) and isset($_GET['date_exp']) and isset($_GET['code_secu']) and isset($_GET['code_postal'])){ 
	
	
$payement1=new payement($_GET['nom_carte'],$_GET['num_carte'],$_GET['date_exp'],$_GET['code_secu'],$_GET['code_postal'],$_SESSION['adresse']);
$payement1C=new payementC();
$payement1C->ajouterpayement($payement1);

header('Location: index.html');
	
}else{
	echo "vérifier les champs";
}
//*/
?>
