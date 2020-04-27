<?php
class commandes{
     private $ref_cmd;
     private $ref_prod;
     private $username;
     private $categorie;
     private $prix_total;
     private $jour_arrivee;
     
function __construct($ref_prod,$username,$categorie,$prix_total,$jour_arrivee){
    $this->ref_prod=$ref_prod; 
    $this->username=$username;  
    $this->categorie=$categorie;  
    $this->prix_total=$prix_total;   
    $this->jour_arrivee=$jour_arrivee;  
   
} 

function get_ref_cmd(){
    return $this->ref_cmd;
}
function get_ref_prod(){
    return $this->ref_prod;
}
function get_username(){
    return $this->username;
}
function get_categorie(){
    return $this->categorie;
}
function get_prix_total(){
    return $this->prix_total;
}
function get_jour_arrivee(){
    return $this->jour_arrivee;
}


function setRef_prod($ref_prod){
    $this->ref_prod=$ref_prod;
}
function setUsername($username){
    $this->username=$username;
}
function setPrix_total($prix_total){
    $this->prix_total=$prix_total;
}
function setcategorie($categorie){
    $this->categorie=$categorie;
}
function setjour_arrivee($jour_arrivee){
    $this->jour_arrivee=$categojour_arriveerie;
}


}
?>