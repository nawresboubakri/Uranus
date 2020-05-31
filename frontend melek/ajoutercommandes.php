<?php
include "../../core/produitC.php";
$clientC=new ClientCore();
	$resultat1=$clientC->AfficherClients1($_SESSION['email']);
	foreach($resultat1 as $row){
		$users=$row['Pseudo'];
	}

if (isset($_GET['ref_prod'])){
	$produitC=new ProduitC();
    $result=$produitC->recupererProduit($_GET['ref_prod']);
	foreach($result as $row){
		$ref_prod=$row['ref_prod'];
		$nom_prod=$row['nom_prod'];
		$quantite=$row['quantite'];
		$description_prod=$row['description_prod'];
		$disponibilite=$row['disponibilite'];
		$prix_prod=$row['prix_prod'];
		$src=$row['src'];

		
	
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_ref_prod = array_column($_SESSION["shopping_cart"], "item_ref_prod");
		if(!in_array($_GET["ref_prod"], $item_array_ref_prod))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_ref_prod'			=>	 $row['ref_prod'],
				'item_nom_prod'			=>	$row['nom_prod'],
				'item_prix_prod'		=>	$row['prix_prod'],
				'item_quantite'		=>	$row['quantite'],
				'item_src'  =>  $row['src'],
				
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			//echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_ref_prod'			=>	 $row['ref_prod'],
			'item_nom_prod'			=>	$row['nom_prod'],
			'item_prix_prod'		=>	$row['prix_prod'],
			'item_quantite'		=>	$row['quantite'],
			'item_src'  =>  $row['src']
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}

	

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_ref_prod"] ==  $row['ref_prod'])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				
				echo '<script>window.location="shoping-cart.php"</script>';
			}
		}
	}
}
	
}

}
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