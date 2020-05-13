
<?php 
class rate{
    
    private $adresse ;
    private $rate;
   
function __construct($adresse,$rate){
   
    $this->adresse=$adresse;
    $this->rate=$rate;
   
}

function getAdresse(){
    return $this->adresse;
}
function getRate(){
    return $this->rate;
}


function setAdresse($adresse){
    $this->adresse=$adresse;
}
function setRate($rate){
    $this->rate=$rate;
}

}
?>