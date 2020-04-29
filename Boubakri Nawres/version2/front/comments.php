<?PHP
class Comments{
	private $id;
	private $name;
	private $comment;
	private $ref_prod;
	


	function __construct($id,$name,$comment,$ref_prod){
		$this->id=$id;
		$this->name=$name;
		$this->comment=$comment;
		$this->ref_prod=$ref_prod;
		
		
	}
	
	function getID(){
		return $this->id;
	}
	function getName(){
		return $this->name;
	}
	function getComment(){
		return $this->comment;
	}
	function getReff(){
		return $this->ref_prod;
	}
	

	function setID($id){
		$this->id=$id;
	}
	function setName($name){
		$this->name=$name;
	}
	function setComment($comm){
		$this->comment=$comm;
	}
	function setReff($ref_prod){
		$this->ref_prod=$ref_prod;
	}
	
	
}

?>