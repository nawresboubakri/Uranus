<?PHP
include "../Core/ClubCore.php";
include "../Entities/ClubsEntities.php";


$Club2=new ClubsCore();
if (isset($_POST['modifierClubs'])){
$Club1=new Club($_POST['Nom_'],$_POST['Categorie'],$_POST['Region'],$_POST['Adresse'],$_POST['Horaire']);
	$Club2->modifierClub($Club1,$_POST['Nom_ini']);
        
       header("Location:AfficherClub.php");
	//echo $_POST['Nom_ini'];
}
	
	 ?>