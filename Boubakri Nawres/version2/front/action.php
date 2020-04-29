<?php
$conn = mysqli_connect("localhost","root","","projet-web");
if(isset($_GET['t'])AND isset($_GET['id']) AND !empty($_GET['t']) AND !empty($_GET['id'])){
	$check =$conn->prepare('SELECT id FROM produit WHERE id =?');
	//$check->execute(array($getid));

}
header('Location:product.php');
?>