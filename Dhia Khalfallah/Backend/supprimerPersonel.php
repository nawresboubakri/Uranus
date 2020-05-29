<?PHP
include "../../core/reclam.php";
$personel=new PersonelsC();
if (isset($_POST["cin"])){
	$personel->supprimerPers($_POST["cin"]);
	header('Location: table-service.php');
}

?>