<? 
session_start();

?>
<?php 
class comment{
    private $email;
    private $nom;
    private $prenom;
    private $commentaire ;
    
function __construct($email,$nom,$prenom,$commentaire){
    $this->email=$email;
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->commentaire=$commentaire;

}
function getEmail(){
    return $this->email;
}
function getNom(){
    return $this->nom;
}
function getPrenom(){
    return $this->prenom;
}
function getCommentaire(){
    return $this->commentaire;
}

function setEmail($email){
    $this->email=$email;
}
function setNom($nom){
    $this->nom=$nom;
}
function setPrenom($prenom){
    $this->prenom=$prenom;
}
function setCommentaire($commentaire){
    $this->commentaire=$commentaire;
}

}
?>