<?php
include "../../config1.php";
include"comments.php";
class CommentsC
{
    function ajouterComment($comments){
		/*$sql="insert into comments (id,name,comment,ref_prod)
 values (:id, :name,:comment,:ref_prod)";*/
 $sql="insert into comments (id,name,comment,ref_prod)
 values (:id, :name,:comment,:ref_prod)";
		$db = config1::getConnexion();
		try{
        $req=$db->prepare($sql);
         $id=$comments->getID();
         $name=$comments->getName();
        $comment=$comments->getComment();
        $ref_prod=$comments->getReff();
       
        

		$req->bindValue(':id',$id);
		$req->bindValue(':name',$name);
		$req->bindValue(':comment',$comment);
		$req->bindValue(':ref_prod',$ref_prod);
      

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    }
   function afficherComment(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From comments c inner join produit p on c.ref_prod=p.ref_prod";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function recupererComment($reff){
		$sql="SELECT * from comments where ref_prod=$reff";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
 /*   function afficherComment_CL($ref){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		//$sql="SElECT COM, NOM_CLI, prenom  From comment INNER JOIN client ON comment.NOM_CLI = client.nom where ID_EV=$ref ";

		//$sql="SElECT * From comment c inner join produit ON produit p on e.cin= a.cin";
		$sql="SElECT * From comment ";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
  */
}



?>