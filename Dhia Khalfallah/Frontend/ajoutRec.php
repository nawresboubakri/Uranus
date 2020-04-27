<?PHP
include "entities/reclamation.php";
include "core/reclam.php";

if ( !(empty($_POST['mail'])) && !(empty($_POST['sujet'])) && !(empty($_POST['details'])) && !(empty($_POST['idc'])) )
{

	if ( verif($_POST['mail'])) {
		$id=uniqid("ref_") ;
		$reclam1=new Reclamation($_POST['mail'],$_POST['sujet'],$_POST['details'],$_POST['idc'],$id);

$reclam1c=new Reclam();
$reclam1c->ajouterReclam($reclam1);
	

}
else
{
	$message = "Verifier le format de votre email saisie!";
echo "<script type='text/javascript'>alert('$message');</script>";
}

}else{
	echo "Vérifier les champs";
}
//*/

?>