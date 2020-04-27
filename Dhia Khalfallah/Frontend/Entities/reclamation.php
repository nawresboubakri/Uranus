<?PHP
class Reclamation{
	private $mail;
	private $sujet;
	private $details;
	private $idc;
	private $idr;
	function __construct($mail,$sujet,$details,$idc,$idr){
		$this->mail=$mail;
		$this->sujet=$sujet;
		$this->details=$details;
		$this->idc=$idc;
		$this->idr=$idr;
	}
	
	function getMail(){
		return $this->mail;
	}
	function getSujet(){
		return $this->sujet;
	}
	function getDetails(){
		return $this->details;
	}
	function getIdc(){
		return $this->idc;
	}
	function getIdr(){
		return $this->idr;
	}


	
}

?>