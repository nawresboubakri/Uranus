


 <?PHP
 include "../../entities/produit.php";
 include "../../core/produitC.php";


if (isset($_POST['modifier'])){
    $produitC=new ProduitC();
    $produit=new produit($_POST['ref_prod'],$_POST['nom_prod'],$_POST['quantite'],$_POST['description_prod'],$_POST['disponibilite'],$_POST['prix_prod'],$_POST['cat'],$_POST['src']);
    $produitC->modifierProduit($produit,$_POST['ref_prod_ini']);
    echo $_POST['ref_prod_ini'];
    header('Location: table-produit.php');
}
?>