

<?php
session_start();

include"CommentsC.php";
//include "comments.php";

if (isset($_POST['comment']) ){

$comment=new Comments($_POST['id'],$_POST['name'],$_POST['comment'],$_POST['ref_prod']);
	

$Comments1C=new CommentsC();
   
$Comments1C->ajouterComment($comment);


header('Location: index.php');	
}else{
	echo "vérifier les champs";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="index.php" method="POST">
<!--	<div>
		<input type="number" name="id" value="idddd">
	</div> -->
	<div>
		<input type="text" name="name" value="yourname">
	</div>
	<div>
		<input type="number" name="ref_prod" value="reff">
	</div>
	<div>
		<textarea name="comment" cols="50" rows="2"> Enter comment</textarea>
	</div>

	<input type="submit" name="submit">
	
</form>
</body>
</html>
