<?

class Random{
	
	private $position;
	private $title ; 
	private $details ; 
	
	public function __construct($position){
		
		$this->position = $position ;
		include('connection.php');
	
	} // END OF CONSTRUCT
	
	public function getTitle(){
	
	$title_query = mysql_query("SELECT title FROM random_details WHERE position='$this->position'");
	while($title_data = mysql_fetch_array($title_query)){
		
		$this->title = $title_data['title'];
		return $this->title ; 
	}
		
		
	} // END OF getTitle
	
	
	public function getDetails(){
	
	$details_query = mysql_query("SELECT details FROM random_details WHERE position='$this->position'");
	while($details_data = mysql_fetch_array($details_query)){
		
		$this->details = $details_data['details'];
		return $this->details ; 
	}
		
		
	} // END OF getDetails
	
	
	
} // END OF CLASS




?>