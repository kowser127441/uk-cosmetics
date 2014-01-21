<?php

class Verification{

public $user_id;
public $password;	
	
	

public function __construct(){
	
$this->user_id = $_SESSION['user_id'];
$this->password = $_SESSION['password'];	
	
}// END OF CONSTRUCT


public function isValid(){
	include('../connection.php');
	
	$query = mysql_query("Select * from admin_access WHERE admin_id='$this->user_id'") ;
	
	while($data = mysql_fetch_array($query)){
		
		$db_password = $data['admin_password'];
		
		}
	$last = strstr($db_password,':');
	$last_without = substr($last, 1);
	$first = substr($db_password , 0, 32);
	$pass_user = md5($this->password.$last_without);
	
	if($pass_user == $first){
		return true ;	
	}
	else {
		return false ; 
	}
	
	
	
}// END OF isValid



} // END OF CLASS


?>