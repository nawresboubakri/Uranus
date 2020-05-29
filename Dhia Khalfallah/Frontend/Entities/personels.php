<?PHP
class Personels{
	private $nom;
	private $prenom;
	private $cin;
	private $mail;
	private $tel;
	function __construct($nom,$prenom,$cin,$mail,$tel){
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->cin=$cin;
		$this->mail=$mail;
		$this->tel=$tel;
	}
	
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getCin(){
		return $this->cin;
	}
	function getMail(){
		return $this->mail;
	}
	function getTel(){
		return $this->tel;
	}
	function setNom($nom){
		 $this->nom=$nom;
	}
	function setPrenom($prenom){
		 $this->prenom=$prenom;
	}
	function setCin($cin){
		 $this->cin=$cin;
	}
	function setMail($mail){
		 $this->mail=$mail;
	}
	function setTel($tel){
		 $this->tel=$tel;
	}

	
}

?>