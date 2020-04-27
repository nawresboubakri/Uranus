<?php
include "header.php"; 
if(isset($_GET['ref_prod']) and isset($_GET['username']) and isset($_GET['categorie']) and isset($_GET['prix_total']) and isset($_GET['jour_arrivee']) )
{
 
 

$username= $_GET['username'];
$categorie= $_GET['categorie'];
$prix_total= $_GET['prix_total'];
$jour_arrivee= $_GET['jour_arrivee'];

foreach($_SESSION["shopping_cart"] as $keys => $values)
						             {
                                        $ref_prod = $values["item_ref_prod"];                    
$query= "INSERT INTO commandes (ref_prod,username,categorie,prix_total,jour_arrivee) VALUES ('$ref_prod','$username','$categorie','$prix_total','$jour_arrivee')";
 echo $query;

$db = config::getConnexion(); 

$exe=$db->exec($query);
}

$ref_cmd=$db->LastInsertID();
header('Location: livraison.php?ref_cmd='.$db->LastInsertID());
}
?>