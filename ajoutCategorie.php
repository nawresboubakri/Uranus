<?PHP
include "../../entities/categorie.php";
include "../../core/categorieC.php";

if (isset($_GET['cat']) and isset($_GET['ref_cat']) and isset($_GET['generation']) and isset($_GET['marque']) and isset($_GET['size']) and isset($_GET['couleur']) and isset($_GET['stock']) ){

$categorie1=new Categorie($_GET['cat'],$_GET['ref_cat'],$_GET['generation'],$_GET['marque'],$_GET['size'],$_GET['couleur'],$_GET['stock']);

$categorie1C=new CategorieC();
$categorie1C->ajouterCategorie($categorie1);
/*header('Location: afficherProduit.php');*/

header('Location: table-produit.php');	
}else{
	echo "vérifier les champs";
}


?>