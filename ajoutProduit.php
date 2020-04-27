<?PHP
include "../../entities/produit.php";
include "../../core/produitC.php";

if (isset($_GET['ref_prod']) and isset($_GET['nom_prod']) and isset($_GET['quantite']) and isset($_GET['description_prod']) and isset($_GET['disponibilite']) and isset($_GET['prix_prod']) and isset($_GET['cat']) and isset($_GET['src'])){

$produit1=new Produit($_GET['ref_prod'],$_GET['nom_prod'],$_GET['quantite'],$_GET['description_prod'],$_GET['disponibilite'],$_GET['prix_prod'],$_GET['cat'],$_GET['src']);

$produit1C=new ProduitC();
$produit1C->ajouterProduit($produit1);
/*header('Location: afficherProduit.php');*/

header('Location: table-produit.php');	
}else{
	echo "vérifier les champs";
}
//*/

?>