<?php

include "../../config.php";
class commandeF
{
function ajouter_commande($commandes){
    $requette = "INSERT INTO commandes(ref_prod,username,categorie,prix_total,jour_arrivee,mod_paiement)
     VALUES (:ref_prod,:username,:categorie,:prix_total,:jour_arrivee,:mod_paiement)";
    $db = config::getConnexion(); 
    try{
        $req = $db->prepare($requette);
      
        $ref_prod = $commandes->get_ref_prod();
        $username = $commandes->get_username();
        $categorie = $commandes->get_categorie();
        $prix_total = $commandes->get_prix_total();
        $jour_arrivee = $commandes->get_jour_arrivee();
        $mod_paiement = $commandes->get_mod_paiement();
     
		$req->bindValue(':ref_prod',$ref_prod);
		$req->bindValue(':username',$username);
		$req->bindValue(':categorie',$categorie);
        $req->bindValue(':prix_total',$prix_total);
        $req->bindValue(':jour_arrivee',$jour_arrivee);
        $req->bindValue(':mod_paiement',$mod_paiement);
		
            $req->execute();

    }
    catch(PDOException $e )
    {
    echo 'Echec: ' .$e->getMessage();   
    }
}

function afficherCom ($commandes){
    echo "ref_cmd: ".$commandes-> get_ref_cmd()."<br>";
    echo "ref_prod: ".$commandes->get_ref_prod()."<br>";
    echo "username: ".$commandes->get_username()."<br>";
    echo "categorie: ".$commandes->get_categorie()."<br>";
    echo "prix_total: ".$commandes->get_prix_total()."<br>";
    echo "jour_arrivee: ".$commandes->get_jour_arrivee()."<br>";
    echo "mod_paiement: ".$commandes->get_mod_paiement()."<br>";
}
function afficherComs(){
    //$sql="SElECT * From utilisateurs ";
    $sql="SElECT * From commandes";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}
function supprimercom($ref_cmd)
{
 $sql="DELETE FROM commandes where ref_cmd= :ref_cmd"; 
 $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':ref_cmd',$ref_cmd);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
}
function modifiercomm($commandes,$ref_cmd){
    $sql="UPDATE commandes SET  ref_prod=:ref_prod,username=:username,categorie=:categorie,prix_total=:prix_total,jour_arrivee=:jour_arrivee,mod_paiement=:mod_paiement  where ref_cmd= :ref_cmd ";
    
    $db = config::getConnexion();
    //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
    $req=$db->prepare($sql);
    $ref_prod=$commandes->get_ref_prod();
    $username=$commandes->get_username();
    $categorie=$commandes->get_categorie();
    $prix_total=$commandes->get_prix_total();
    $jour_arrivee=$commandes->get_jour_arrivee();
    $mod_paiement=$commandes->get_mod_paiement();
    $datas = array(':ref_prod'=>$ref_prod,':username'=>$username,':categorie'=>$categorie,':prix_total'=>$prix_total,':jour_arrivee'=>$jour_arrivee,':mod_paiement'=>$mod_paiement);
    $req->bindValue(':ref_cmd',$ref_cmd);
    $req->bindValue(':ref_prod',$ref_prod);
    $req->bindValue(':username',$username);
    $req->bindValue(':categorie',$categorie);
    $req->bindValue(':prix_total',$prix_total);
    $req->bindValue(':jour_arrivee',$jour_arrivee);
    $req->bindValue(':mod_paiement',$mod_paiement);
    
     
        $s=$req->execute();
        
       // header('Location: index.php');
    }
    catch (Exception $e){
        echo " Erreur ! ".$e->getMessage();
echo " Les datas : " ;
print_r($datas);
    }
}
function recuperertComm($ref_cmd){
    $sql="SELECT * from commandes where ref_cmd=$ref_cmd";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
	
function trierCommande($c)
{
      
  if ($c == "ref_prod") $sql = "SELECT * from commandes order by ref_prod desc";
  else if ($c == "username") $sql = "SELECT * from commandes order by username desc";
  else if ($c== "prix_total") $sql = "SELECT * from commandes order by prix_total desc";
  
  $db = config::getConnexion();
        
        $result = $db->prepare($sql);
     $result->bindValue(1, "%$c%", PDO::PARAM_STR);
     $result->execute();
       return $result->fetchAll();


}
function searchCommande($c)
{
      
  $sql = "SELECT * from commandes WHERE ref_cmd=$c ";
  
  
  $db = config::getConnexion();
        
        $result = $db->prepare($sql);
     $result->bindValue(1, "%$c%", PDO::PARAM_STR);
     $result->execute();
       return $result->fetchAll();


}
}
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
function supprimerli($num_livraison)
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
function trierli($c)
{
      
  if ($c == "ref_cmd") $sql = "SELECT * from livraison order by ref_cmd desc";
  else if ($c == "Destination") $sql = "SELECT * from livraison order by Destination desc";
  else if ($c== "code_postal") $sql = "SELECT * from livraison order by code_postal desc";
  
  $db = config::getConnexion();
        
        $result = $db->prepare($sql);
     $result->bindValue(1, "%$c%", PDO::PARAM_STR);
     $result->execute();
       return $result->fetchAll();


}
}
?>