<?PHP
include "entities/reclamation.php";
include "core/reclam.php";

$Reclamation=new Reclam();
if (isset($_POST["ref_reclamations"])){


	$Reclamation->supprimerReclam($_POST["ref_reclamations"]);
		$message = "Reclamation supprimer avec succés!";
echo "<script type='text/javascript'>alert('$message');</script>";

}


?>