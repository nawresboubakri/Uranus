<?PHP
include "../Core/ClubCore.php";
include "../Entities/AbnEntities.php";


$Abn2=new ClubsCore();
if (isset($_POST['modifierAbns'])){
$Abn=new Abn($_POST['IDAbn_'],$_POST['Nom_salle'],$_POST['Duree'],$_POST['Tarif']);
	$Abn2->modifierAbn($Abn,$_POST['id_ini']);
        
       header("Location:AfficherClub.php");
	//echo $_POST['Nom_ini'];
}
	
	 ?>