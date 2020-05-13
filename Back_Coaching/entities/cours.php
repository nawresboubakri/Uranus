<? 
session_start();

?>
<?PHP
class cours{
	private $ref_cours;
	private $categorie;
	private $duree;
	private $id_coach;
    private $nbr_participants;
    private $prix;
    private $h_debut;
    private $jour;
	private $id_client;


	function __construct($ref_cours,$categorie,$duree,$id_coach,$nbr_participants,$prix,$h_debut,$jour,$id_client){
		$this->ref_cours=$ref_cours;
		$this->categorie=$categorie;
		$this->duree=$duree;
		$this->id_coach=$id_coach;
		$this->nbr_participants=$nbr_participants;
        $this->prix=$prix;
        $this->h_debut=$h_debut;
        $this->jour=$jour;
        $this->id_client=$id_client;
    }
	
	function getref_cours(){
		return $this->ref_cours;
	}
    function getcategorie(){
		return $this->categorie;
	}
    function getduree(){
		return $this->duree;
	}
    function getid_coach(){
		return $this->id_coach;
	}
    function getnbr_participants(){
		return $this->nbr_participants;
	}
    function getprix(){
		return $this->prix;
	}
    function geth_debut(){
		return $this->h_debut;
	}
    function getjour(){
		return $this->jour;
	}
    function getid_client(){
		return $this->id_client;
	}
    

	function setref_cours($ref_cours){
		$this->ref_cours=$ref_cours;
    }
    function setcategorie($categorie){
		$this->categorie=$categorie;
	}
    function setduree($duree){
		$this->duree=$duree;
	}

	function setid_coach($id_coach){
		$this->id_coach=$id_coach;
	}

	function setnbr_participants($nbr_participants){
		$this->nbr_participants=$nbr_participants;
	}

	function setprix($prix){
		$this->prix=$prix;
	}

	function seth_debut($h_debut){
		$this->h_debut=$h_debut;
	}

	function setjour($jour){
		$this->jour=$jour;
    }

    function setid_client($id_client){
		$this->id_client=$id_client;
	}
	
}

?>