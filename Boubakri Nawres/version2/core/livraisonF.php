<?php

include "../../config.php";
class livraisonF
{
function ajouter_livraison($livraison){
    $requette = "INSERT INTO livraison(ref_cmd,destination,code_postal,periode_arrivee)
     VALUES (:ref_cmd,:destination,:code_postal,:periode_arrivee)";
    $db = config::getConnexion(); 
    try{
        $req = $db->prepare($requette);
        $ref_cmd = $livraison-> get_ref_cmd();
       
        $destination = $livraison->get_destination();
        $code_postal = $livraison->get_code_postal();
        $periode_arrivee = $livraison->get_periode_arrivee();
        $req->bindValue(':ref_cmd',$ref_cmd);
		$req->bindValue(':destination',$destination);
		$req->bindValue(':code_postal',$code_postal);
        $req->bindValue(':periode_arrivee',$periode_arrivee);
       
		
            $req->execute();

    }
    catch(PDOException $e )
    {
    echo 'Echec: ' .$e->getMessage();   
    }
}

function afficherli ($livraison){
    echo "ref_cmd: ".$livraison-> get_ref_cmd()."<br>";
    echo "num_livraison: ".$livraison->get_num_livraison()."<br>";
    echo "destination: ".$livraison->get_destination()."<br>";
    echo "code_postal: ".$livraison->get_code_postal()."<br>";
    echo "periode_arrivee: ".$livraison->get_periode_arrivee()."<br>";
    
}
function afficherlis(){
    //$sql="SElECT * From utilisateurs ";
    $sql="SElECT * From livraison";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}
function supprimerli($ref_cmd)
{
 $sql="DELETE FROM livraison where num_livraison= :num_livraison"; 
 $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':num_livraison',$num_livraison);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
}
function modifiercomm($livraison,$num_livraison){
    $sql="UPDATE livraison SET ref_cmd=:ref_cmd, num_livraison=:num_livraisond,destination=:destination,code_postal=:code_postal,periode_arrivee=:periode_arrivee WHERE num_livraison=:num_livraison";
    
    $db = config::getConnexion();
    //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
    $req=$db->prepare($sql);
    $ref_cmd=$livraison->get_ref_cmd();
    $num_livraisond=$livraison->get_num_livraison();
    $destination=$livraison->get_destination();
    $code_postal=$livraison->get_code_postal();
    $periode_arrivee=$livraison->get_periode_arrivee();
    
    $datas = array(':num_livraisond'=>$num_livraisond, ':ref_cmd'=>$ref_cmd, ':num_livraison'=>$num_livraison,':destination'=>$destination,':code_postal'=>$code_postal,':periode_arrivee'=>$periode_arrivee);
    $req->bindValue(':num_livraisond',$num_livraisond);
    $req->bindValue(':ref_cmd',$ref_cmd);
    $req->bindValue(':num_livraison',$num_livraison);
    $req->bindValue(':destination',$destination);
    $req->bindValue(':code_postal',$code_postal);
    $req->bindValue(':periode_arrivee',$periode_arrivee);
        $s=$req->execute();
        
       // header('Location: index.php');
    }
    catch (Exception $e){
        echo " Erreur ! ".$e->getMessage();
echo " Les datas : " ;
print_r($datas);
    }
}
function recuperertli($num_livraison){
    $sql="SELECT * from livraison where num_livraison=$num_livraison";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
function trierli(){
    //$sql="SElECT * From utilissateurs ";
    $sql="SElECT * From livraison ORDER BY destination ";
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