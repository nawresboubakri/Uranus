<?php
include "../../config.php";
class commliC{
function afficherComsli(){
    //$sql="SElECT * From utilisateurs ";
    $sql="SElECT  ref_cmd, ref_prod, username, prix_total, num_livraison, periode_arrivee, mode_payement, From commandes INNER JOIN livraison ON commandes.ref_cmd = livraison.ref_cmd";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}
}
?>