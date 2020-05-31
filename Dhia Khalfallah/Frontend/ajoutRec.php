<?PHP
include "../../entities/reclamation.php";
include "../../core/reclam.php";

$body="Votre reclamation a été recu et sera traiter dans les plus bref delais. Merci pour votre confiance.";


if ( !(empty($_POST['mail'])) && !(empty($_POST['sujet'])) && !(empty($_POST['details'])) && !(empty($_POST['idc'])) )
{

	if ( verif($_POST['mail'])) {
		$id=uniqid("ref_") ;
		$reclam1=new Reclamation($_POST['mail'],$_POST['sujet'],$_POST['details'],$_POST['idc'],$id);

$reclam1c=new Reclam();
$reclam1c->ajouterReclam($reclam1);
  

mail($_POST['mail'], $id, $body, 'From: serviceclients.sport@gmail.com');

 
}
else
{
	$message = "Verifier le format de votre email saisie!";
echo "<script type='text/javascript'>alert('$message');</script>";
}

}else{
	echo "Vérifier les champs";
}
header('Location: contact.php');

?>