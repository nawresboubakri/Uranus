<?PHP

include "categorieC.php";
include "categorie.php";

include "config.php";

include "produitC.php";
include"produit.php";

$produit1C=new ProduitC();
$listeProduits=$produit1C->afficherProduits();

$categorie1C=new CategorieC();
$listeCategories=$categorie1C->afficherCategories();



?>

