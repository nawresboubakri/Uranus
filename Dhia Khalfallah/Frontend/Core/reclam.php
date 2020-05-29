<?PHP
include "../../config.php";
class Reclam
 {	function ajouterReclam($reclam){
		$sql="insert into reclamations (username,sujet,description_rec,id_commandes,ref_reclamations)
 values (:mail, :sujet,:details,:idc,:idr)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $mail=$reclam->getMail();
        $sujet=$reclam->getSujet();
        $details=$reclam->getDetails();
        $idc=$reclam->getIdc();
        $idr=$reclam->getIdr();
		$req->bindValue(':mail',$mail);
		$req->bindValue(':sujet',$sujet);
		$req->bindValue(':details',$details);
		$req->bindValue(':idc',$idc);
		$req->bindValue(':idr',$idr);		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherReclam(){
		$sql="SElECT * From reclamations";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclam($ref){
		$sql="DELETE FROM reclamations where ref_reclamations= :ref";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ref',$ref);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function recupererReclam($mail){
		$sql="SELECT * from reclamations where username=$mail";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherRecCommandes($commande){
		$sql="SELECT * from reclamations where id_commandes=$commande";
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

Class PersonelsC
{



function ajouterPers($Pers){
		$sql="insert into personels (nom,prenom,cin,mail,tel)
 values (:nom, :prenom,:cin,:mail,:tel)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $nom=$Pers->getNom();
        $prenom=$Pers->getPrenom();
        $cin=$Pers->getCin();
        $mail=$Pers->getMail();
        $tel=$Pers->getTel();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':tel',$tel);		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherPers(){
		$sql="SElECT * From personels";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerPers($cin){
		$sql="DELETE FROM personels where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function recupererPers($cin){
		$sql="SELECT * from personels where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

		function modifierPers($pers,$cin){
		$sql="UPDATE personels SET nom=:nom, prenom=:prenom,cin=:cin,mail=:mail,tel=:tel";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nom=$pers->getNom();
        $prneom=$pers->getPrenom();
        $cin=$pers->getCin();
        $mail=$pers->getMail();
        $tel=$pers->getTel();
       
		$datas = array(':nom'=>$nom, ':prenom'=>$prenom, ':cin'=>$cin,':mail'=>$mail,':tel'=>$tel);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prneom);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':tel',$tel);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}




}





	function verif($email)
  {
    $spr = "/^[[:alnum:]][a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/";
    return preg_match($spr, $email);
  }

?>
