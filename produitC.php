<?PHP
include "../../config.php";
//include "bib.php";

class ProduitC {
function afficherProduit ($produit){
		echo "ref_prod: ".$produit->getRef_prod()."<br>";
		echo "nom_prod: ".$produit->getNom_prod()."<br>";
		echo "quantite: ".$produit->getQuantite()."<br>";
		echo "description_prod: ".$produit->getDescription_prod()."<br>";
		echo "disponibilite: ".$produit->getDisponibilite()."<br>";
		echo "prix_prod: ".$produit->getPrix_prod()."<br>";
		echo "cat: ".$produit->getNomCategorie()."<br>";
		echo "src: ".$produit->getSrc()."<br>";
	}
	
	function ajouterProduit($produit){

        $sql="insert into produit (ref_prod,nom_prod,quantite,description_prod,disponibilite,prix_prod,cat,src)
 values(:ref_prod,:nom_prod,:quantite,:description_prod,:disponibilite,:prix_prod,:cat,:src) " ;
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $ref_prod=$produit->getRef_prod();
        $nom_prod=$produit->getNom_prod();
        $quantite=$produit->getQuantite();
        $description_prod=$produit->getDescription_prod();
        $disponibilite=$produit->getDisponibilite();
        $prix_prod=$produit->getPrix_prod();
        $cat=$produit->getNomCategorie();
        $src=$produit->getSrc();

		$req->bindValue(':ref_prod',$ref_prod);
		$req->bindValue(':nom_prod',$nom_prod);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':description_prod',$description_prod);
		$req->bindValue(':disponibilite',$disponibilite);
		$req->bindValue(':prix_prod',$prix_prod);
		$req->bindValue(':cat',$cat);
		$req->bindValue(':src',$src);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherProduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerProduit($ref_prod){
		$sql="DELETE FROM produit where ref_prod= :ref_prod";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ref_prod',$ref_prod);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function modifierProduit($produit,$ref_prod){
		$sql="UPDATE produit SET ref_prod=:reff, nom_prod=:nom_prod,quantite=:quantite,description_prod=:description_prod,disponibilite=:disponibilite,prix_prod=:prix_prod,cat=:cat,src=:src WHERE ref_prod=:ref_prod";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$reff=$produit->getRef_prod();
        $nom_prod=$produit->getNom_prod();
        $quantite=$produit->getQuantite();
        $description_prod=$produit->getDescription_prod();
        $disponibilite=$produit->getDisponibilite();
        $prix_prod=$produit->getPrix_prod();
        $cat=$produit->getNomCategorie();
        $src=$produit->getSrc();

		$datas = array(':reff'=>$reff, ':ref_prod'=>$ref_prod, ':nom_prod'=>$nom_prod,':quantite'=>$quantite,':description_prod'=>$description_prod,':disponibilite'=>$disponibilite,':prix_prod'=>$prix_prod,':cat'=>$cat,':src'=>$src);
		$req->bindValue(':reff',$reff);
		$req->bindValue(':ref_prod',$ref_prod);
		$req->bindValue(':nom_prod',$nom_prod);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':description_prod',$description_prod);
		$req->bindValue(':disponibilite',$disponibilite);
		$req->bindValue(':prix_prod',$prix_prod);
		$req->bindValue(':cat',$cat);
		$req->bindValue(':src',$src);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recupererProduit($reff){
		$sql="SELECT * from produit where ref_prod=$reff";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeProduit($catt){
		$sql="SELECT * from produit where cat=$catt";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function triProduit($tri,$order){

		$sql="SELECT * from produit order by $tri $order";
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
