<? 
session_start();

?>
<?PHP
include "../config.php";
class coachC {
function afficherCoach ($coach){
		echo "id_coach: ".$coach->getId_coach()."<br>";
		echo "Nom: ".$coach->getNom()."<br>";
		echo "Prénom: ".$coach->getPrenom()."<br>";
		echo "specialite: ".$coach->getSpecialite()."<br>";
		echo "date adhesion: ".$coach->getDate_adhesion()."<br>";
	}
	function afficherCoachs($coach11){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From coach WHERE id_coach=$coach11";
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



//////////////////////////////////////////////////////

class coursC {
function affichercours ($cours){
		echo "ref_cours: ".$cours->getref_cours()."<br>";
		echo "categorie: ".$cours->getcategorie()."<br>";
		echo "duree: ".$cours->getduree()."<br>";
		echo " id_coach: ".$cours->getid_coach()."<br>";
        echo "nbr_participants: ".$cours->getnbr_participants()."<br>";
        echo " prix: ".$cours->getprix()."<br>";
        echo " h_debut: ".$cours->geth_debut()."<br>";
        echo " jour: ".$cours->getjour()."<br>";
        echo " id_client: ".$cours->getid_client()."<br>";

	}
	

	function affiche(){
		//$sql="SElECT * From cours e inner join formationphp.cours a on e.ref_cours= a.ref_cours";
		$sql="SElECT ref_cours,jour,duree,h_debut,prix,nom,prenom From cours  INNER JOIN coach ON cours.id_coach=coach.id_coach WHERE categorie='fitness' " ;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function affiche_1(){
		//$sql="SElECT * From cours e inner join formationphp.cours a on e.ref_cours= a.ref_cours";
		$sql="SElECT ref_cours,jour,duree,h_debut,prix,nom,prenom From cours  INNER JOIN coach ON cours.id_coach=coach.id_coach WHERE categorie='cardio' " ;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function affiche_2(){
		//$sql="SElECT * From cours e inner join formationphp.cours a on e.ref_cours= a.ref_cours";
		$sql="SElECT ref_cours,jour,duree,h_debut,prix,nom,prenom From cours  INNER JOIN coach ON cours.id_coach=coach.id_coach WHERE categorie='yoga' " ;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function affiche_21(){
		//$sql="SElECT * From cours e inner join formationphp.cours a on e.ref_cours= a.ref_cours";
		$sql="SElECT ref_cours,jour,duree,h_debut,prix,adresse From cours  INNER JOIN payement ON cours.ref_cours=payement.id_cours where adresse='bonjour'" ;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	
	function affiche_22($e){
		//$sql="SElECT * From cours e inner join formationphp.cours a on e.ref_cours= a.ref_cours";
		$sql="SElECT nom,prenom,specialite From coach  INNER JOIN cours ON cours.id_coach=coach.id_coach where ref_cours=$e" ;
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



class payementC {
	function afficherpayement ($payement){
		echo "ref_cours: ".$payement->getRef_cours()."<br>";
		echo "adresse: ".$payement->getAdresse()."<br>";
			echo "nom_carte: ".$payement->getNom_carte()."<br>";
			echo "num_carte: ".$payement->getNum_carte()."<br>";
			echo "date_exp: ".$payement->getDate_exp()."<br>";
			echo "code_secu: ".$payement->getCode_secu()."<br>";
			echo "code_postal: ".$v->getCode_postal()."<br>";
		}
	
		function ajouterpayement($payement){
			$sql="insert into payement (adresse,nom_carte,num_carte,date_exp,code_secu,code_postal,id_cours)
	 values (:adresse, :nom_carte, :num_carte,:date_exp,:code_secu,:code_postal,:ref_cours)";
			$db = config::getConnexion();
			try{
			$req=$db->prepare($sql);
			$ref_cours=$payement->getRef_cours();
			$adresse=$payement->getAdresse();
			$nom_carte=$payement->getNom_carte();
			$num_carte=$payement->getNum_carte();
			$date_exp=$payement->getDate_exp();
			$code_secu=$payement->getCode_secu();
			$code_postal=$payement->getCode_postal();
			$req->bindValue(':ref_cours',$ref_cours);
			$req->bindValue(':adresse',$adresse);
			$req->bindValue(':nom_carte',$nom_carte);
			$req->bindValue(':num_carte',$num_carte);
			$req->bindValue(':date_exp',$date_exp);
			$req->bindValue(':code_secu',$code_secu);
			$req->bindValue(':code_postal',$code_postal);
			
				$req->execute();
			   
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}
			
		}
		
		function afficherpayements(){
		
			$sql="SElECT * From payement";
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

	function affiche(){
		//$sql="SElECT * From cours e inner join formationphp.cours a on e.ref_cours= a.ref_cours";
		$sql="SElECT ref_cours,jour,duree,h_debut,prix,nom,prenom From cours  INNER JOIN coach ON cours.id_coach=coach.id_coach WHERE categorie='fitness' " ;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	class commentC
	{
	function ajouter_comment($comment){
		$requette = "INSERT INTO commentaire(email,nom,prenom,commentaire)
		 VALUES (:email,:nom,:prenom,:commentaire)";
		$db = config::getConnexion(); 
		try{
			$req = $db->prepare($requette);
			$email = $comment->getEmail();
			$nom = $comment->getNom();
			$prenom = $comment->getPrenom();
			$commentaire = $comment->getCommentaire();
			$req->bindValue(':email',$email);
			$req->bindValue(':nom',$nom);
			$req->bindValue(':prenom',$prenom);
			$req->bindValue(':commentaire',$commentaire);
	
				$req->execute();
	
		}
		catch(PDOException $e )
		{
		echo 'Echec: ' .$e->getMessage();   
		}
	}
	function affichercomment($comment){
		echo "nom: ".$cours->getNom()."<br>";
		echo "prenom: ".$cours->getPrenom()."<br>";
		echo "commentaire: ".$cours->getCommentaire()."<br>";
	
	
	}
	function affichercommentaires(){
		//$sql="SElECT * From utilisateurs ";
		$sql="SElECT * From commentaire  ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}
	function supprimercommentaire($commentaire)
	{
	 $sql="DELETE FROM commentaire where commentaire= :commentaire"; 
	 $db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':commentaire',$commentaire);
			try{
				$req->execute();
			   // header('Location: index.php');
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}   
	}
	
	
	
	}




	class rateC {
		function afficherrate ($rate){
			echo "adresse: ".$rate->getAdresse()."<br>";
				echo "rate: ".$rate->getRate()."<br>";
			}
		
			function ajouterrate($rate){
				$sql="insert into star (adresse,rate)
		 values (:adresse, :rate)";
				$db = config::getConnexion();
				try{
				$req=$db->prepare($sql);
				
				$adresse=$rate->getAdresse();
				$rate=$rate->getRate();
				
		
				$req->bindValue(':adresse',$adresse);
				$req->bindValue(':rate',$rate);
				
				
					$req->execute();
				   
				}
				catch (Exception $e){
					echo 'Erreur: '.$e->getMessage();
				}
				
			}
			
			function afficherrates(){
			
				$sql="SElECT * From star";
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
