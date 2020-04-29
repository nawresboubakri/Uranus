<?php
include 'init.php';
// All articles 

$query =$db->query('SELECT * FROM article');
$articles = array();
while($row = $query->fetch_object()){
	$articles[] = $row;

}
print_r($articles);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
</head>
<body>

</body>
</html>