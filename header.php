<?php 
session_start();
include "../../core/produitC.php";
$_SESSION['username']=55;

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
?>


