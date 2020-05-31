<?php
session_start();
?>
<?php
include "../../core1/actualitesC.php";
$var = 3;
$com=new CommentC();
$liste = $com->afficherComment_CL($var);
foreach($liste as $row)
{
    echo $row['COM'];
    echo $row['NOM_CLI'];
    echo $row['prenom'];
}
?>