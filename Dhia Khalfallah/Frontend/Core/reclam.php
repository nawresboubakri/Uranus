<?PHP
include "config.php";
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

	function verif($email)
  {
    $spr = "/^[[:alnum:]][a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/";
    return preg_match($spr, $email);
  }

?>
