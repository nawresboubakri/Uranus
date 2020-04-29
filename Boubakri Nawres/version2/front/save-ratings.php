<?php

$product_id = $_POST["product_id"];
$ratings = $_POST["ratings"];

$conn = mysqli_connect("localhost", "root", "", "projet-web");

mysqli_query($conn, "INSERT INTO ratings (product_id, ratings) VALUES ('$product_id', '$ratings')");

// whatever you echo here, will be displayed in alert on user side
echo "Saved";
/*
 var rating = document.getElementsByClassName("ratings");

// Loop through all divs
for (var a = 0; a < rating.length; a++)
{

    // Display star on each div based on data-rating attribute value
    // readOnly will prevent the user changing it's value
    $(rating[a]).starrr({
        readOnly: true,
        rating: rating[a].getAttribute("data-rating")
    });
}*/

?>


