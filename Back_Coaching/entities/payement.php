<? 
session_start();

?>
<?php 
class payement{
    private $ref_cours;
    private $adresse ;
    private $nom_carte;
    private $num_carte;
    private $date_exp;
    private $code_secu;
    private $code_postal;
function __construct($nom_carte,$num_carte,$date_exp,$code_secu,$code_postal,$adresse,$ref_cours){
    $this->ref_cours=$ref_cours;
    $this->adresse=$adresse;
    $this->nom_carte=$nom_carte;
    $this->num_carte=$num_carte;
	$this->date_exp=$date_exp;
    $this->code_secu=$code_secu;
    $this->code_postal=$code_postal;
}
function getRef_cours(){
    return $this->ref_cours;
}
function getAdresse(){
    return $this->adresse;
}
function getNom_carte(){
    return $this->nom_carte;
}
function getNum_carte(){
    return $this->num_carte;
}
function getDate_exp(){
    return $this->date_exp;
}
function getCode_secu(){
    return $this->code_secu;
}
function getCode_postal(){
    return $this->code_postal;
}

function setRef_cours($ref_cours){
    $this->ref_cours=$ref_cours;
}
function setAdresse($adresse){
    $this->adresse=$adresse;
}
function setNom_carte($nom_carte){
    $this->nom_carte=$nom_carte;
}
function setNum_carte($num_carte){
    $this->num_carte=$num_carte;
}
function setDate_exp($date_exp){
    $this->date_exp=$date_exp;
}
function setCode_secu($code_secu){
    $this->code_secu=$code_secu;
}
function setCode_postal($code_postal){
    $this->code_postal=$code_postal;
}
}
?>