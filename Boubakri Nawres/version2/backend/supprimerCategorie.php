<?PHP
include "../../core/categorieC.php";

$categorieC=new CategorieC();
if (isset($_POST["ref_cat"])){
	$categorieC->supprimerCategorie($_POST["ref_cat"]);
	header('Location: table-produit.php');
}

?>


