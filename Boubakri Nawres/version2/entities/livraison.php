<?php
class livraison{
     private $ref_cmd;
     private $num_livraison;
     private $destination;
     private $code_postal;
     private $periode_arrivee;
    
function __construct($ref_cmd,$destination,$code_postal,$periode_arrivee){
    $this->ref_cmd=$ref_cmd; 
    $this->destination=$destination;  
    $this->code_postal=$code_postal;  
    $this->periode_arrivee=$periode_arrivee;   
} 

function get_ref_cmd(){
    return $this->ref_cmd;
}
function get_num_livraison(){
    return $this->num_livraison;
}
function get_destination(){
    return $this->destination;
}
function get_code_postal(){
    return $this->code_postal;
}
function get_periode_arrivee(){
    return $this->periode_arrivee;
}

function setRef_cmd($ref_cmd){
    $this->ref_cmd=$ref_cmd;
}
function setnum_livraison($num_livraison){
    $this->num_livraison=$num_livraison;
}
function setdestination($destination){
    $this->destination=$destination;
}
function setperiode_arrivee($periode_arrivee){
    $this->periode_arrivee=$periode_arrivee;
}
function setcode_postal($code_postal){
    $this->code_postal=$code_postal;
}


}
?>