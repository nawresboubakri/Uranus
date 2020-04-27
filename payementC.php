<?PHP
include "../../config.php";
class payementC {
function afficherpayement ($payement){
	echo "adresse: ".$payement->getAdresse()."<br>";
		echo "nom_carte: ".$payement->getNom_carte()."<br>";
		echo "num_carte: ".$payement->getNum_carte()."<br>";
		echo "date_exp: ".$payement->getDate_exp()."<br>";
		echo "code_secu: ".$payement->getCode_secu()."<br>";
		echo "code_postal: ".$v->getCode_postal()."<br>";
	}

	function ajouterpayement($payement){
		$sql="insert into payement (adresse,nom_carte,num_carte,date_exp,code_secu,code_postal)
 values (:adresse, :nom_carte, :num_carte,:date_exp,:code_secu,:code_postal)";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$adresse=$payement->getAdresse();
        $nom_carte=$payement->getNom_carte();
        $num_carte=$payement->getNum_carte();
        $date_exp=$payement->getDate_exp();
        $code_secu=$payement->getCode_secu();
		$code_postal=$payement->getCode_postal();
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



?>
