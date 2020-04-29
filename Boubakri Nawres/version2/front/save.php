<?php

$product_id = $_POST["product_id"];
$ratings = $_POST["ratings"];

$conn = mysqli_connect("localhost","root","","nawres");
mysqli_query($conn,"INSERT INTO ratings (id,product_id,ratings) VALUES ('$id',$product_id','$ratings')");
echo "saved";
?>