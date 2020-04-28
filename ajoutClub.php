<?PHP

include "../Core/ClubCore.php";
include "../Entities/ClubsEntities.php";


 if (isset($_POST['Nom']) and isset($_POST['Categorie']) and isset($_POST['Region'])  and isset($_POST['Adresse']) and isset($_POST['Horaire']) ){
$club1=new club($_POST['Nom'],$_POST['Categorie'],$_POST['Region'],$_POST['Adresse'],$_POST['Horaire']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$club1C=new ClubsCore();
$club1C->ajouterClub($club1);

header('Location: AfficherClub.php');

	
}else{
	echo "vérifier les champs";
}
//*/

?>