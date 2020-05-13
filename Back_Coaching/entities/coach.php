<? 
session_start();

?>
<?php 
class coach{
    private $id_coach;
    private $nom;
    private $prenom;
    private $specialite;
    private $date_adhesion;
function __construct($id_coach,$nom,$prenom,$specialite,$date_adhesion){
    $this->id_coach=$id_coach;
    $this->nom=$nom;
	$this->prenom=$prenom;
    $this->specialite=$specialite;
    $this->date_adhesion=$date_adhesion;
}
function getId_coach(){
    return $this->id_coach;
}
function getNom(){
    return $this->nom;
}
function getPrenom(){
    return $this->prenom;
}
function getSpecialite(){
    return $this->specialite;
}
function getDate_adhesion(){
    return $this->date_adhesion;
}
function setNom($nom){
    $this->nom=$nom;
}
function setPrenom($prenom){
    $this->prenom=$prenom;
}
function setSpecialite($specialite){
    $this->specialite=$specialite;
}
function setDate_adhesion($date_adhesion){
    $this->date_adhesion=$date_adhesion;
}
}
?>