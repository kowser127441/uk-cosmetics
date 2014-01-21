<?php

class Login{
	
	private $email; 
	private $password  ;
	
	
	public function __construct($email , $password){
		$this->email = $email;
		$this->password  = $password ; 
		
		require('connection.php');
		
		session_start();
		
	}// END OF CONSTRUCT
	
	public function loginCheck(){
		
		$query = mysql_query("Select * from user WHERE email='$this->email'") ;
		
		$count = mysql_num_rows($query);
		if($count > 0)
		{
										
										while($data = mysql_fetch_array($query))
										{
										
										  $db_password = $data['password'];
										  $user_id = $data['user_id'];
										  $user_name = $data['last_name'];
										  
										  $user_full_name = $data['title'].' '.$data['first_name'].' '.$data['last_name'] ;
										  
										  //echo $db_password.'<br/>';
											
										}
										
										//echo 'db_password'.$db_password.'<br/>';
										
										
										// Retrive the Last Part With colone ':'
										$last = strstr($db_password,':');
										
										
										//echo 'salt with coon-'.$last.'<br/>' ; 
										// Remove colone ':' from Last Part 
										$last_without = substr($last, 1);
										
										//echo 'without- '.$last_without.'<br/>' ;
										// First Part 
										$first = substr($db_password , 0, 32);
										
										//echo 'first-'.$first.'<br/>' ;
										
										$pass_user = md5($this->password.$last_without);
										
										//echo 'pass+md5-'.$pass_user.'<br/>';
										
										if($pass_user == $first)
										{
											
											$_SESSION['user_access']=$this->email;
											$_SESSION['user_email']=$this->email;
		                                  	 $_SESSION['password']=$this->password;
											$_SESSION['user_name']=$user_name;
											$_SESSION['user_full_name']=$user_full_name;
											$_SESSION['success']='Login Successful';
											
											return true ; 
											
										}
										
										else
										{
											$_SESSION['user_access_error']='Wrong Password !';
						 					return false ; 
										}
										
		} 
		
		else { // When count is smaller than 0 
		
			$_SESSION['user_access_error']='Wrong Email !';
			return false ; 
		
		}
		
		
	}// End of loginCheck
	
	
} // END OF CLASS

?>