<?PHP

include "../Core/ClubCore.php";
include "../Entities/AbnEntities.php";
//include  "/SMS/SMS.php" ;

if (isset($_POST['IDAbn']) and isset($_POST['Nom_salle']) and isset($_POST['Duree'])  and isset($_POST['Tarif'])  ){
$Abn1=new Abn($_POST['IDAbn'],$_POST['Nom_salle'],$_POST['Duree'],$_POST['Tarif']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$Abn1C=new ClubsCore();
$Abn1C->ajouterabn($Abn1);
//SMS() ;
header('Location: AfficherClub.php');
	
}else{
	echo "vérifier les champs";
}


?>