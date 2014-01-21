<?php

class Signup{
	
private  $title;
private  $first_name;
private  $last_anme;
private  $house;
private  $address;
private  $town_city;
private  $country;
private  $zip_code;
private  $email;
private  $password;
private  $mobile;
private  $prefered_contact;

private $email_check;

private $new_password ;


public function __construct($title,$first_name,$last_name,$house,$address,$town,$country,$post_code,$email,$password,$mobile,$prefered_contact){
	
	$this->title = $title;
	$this->first_name = $first_name;
	$this->last_anme = $last_name;
	$this->house = $house;
	$this->address = $address;
	$this->town_city = $town;
	$this->country = $country;
	$this->zip_code = $post_code;
	$this->email = $email;
	$this->password = $password;
	$this->mobile = $mobile;
	$this->prefered_contact = $prefered_contact;
	$this->new_password = $this->generatePassword($this->password);
	
	
	include('connection.php');
	
	session_start();
	
}// END OF CONSTRUCT

public function getSignUp(){
	
	session_start();
	
	$email_check = $this->emailCheck();
	
	if($email_check = true)
	{
	
	$query = "
	INSERT INTO user 
	(title,first_name,last_name,house,address,town,country,post_code,email,password,mobile,prefered_contact)
	VALUES
	(
	'$this->title',
	'$this->first_name',
	'$this->last_anme',
	'$this->house',
	'$this->address',
	'$this->town_city',
	'$this->country',
	'$this->zip_code',
	'$this->email',
	'$this->new_password',
	'$this->mobile',
	'$this->prefered_contact'
	)
	";
	
	if(!mysql_query($query)){
		
		
		$_SESSION['error']=3;
		return false ;	
	}
	else{
		return true ;
	}
	
	}
	
	else
	{
		return false ;	
	}
	
}// END OF getSignIn 

public function emailCheck(){
	
	$email_sql = mysql_query("SELECT email FROM user WHERE email='$this->email'");
	
	$count = mysql_num_rows($email_sql);
	
	if($count > 0 )
	{
		
		$_SESSION['error']=3;
		return false;	
	}
	
	else
	{
		$_SESSION['user_access']=$this->email;
		$_SESSION['user_email']=$this->email;
		$_SESSION['password']=$this->password;
		$_SESSION['user_name']=$this->last_anme;
		$_SESSION['user_full_name']=$this->title.' '.$this->first_name.' '.$this->last_anme ;
		
		return true ; 	
	}
	
	
} // END OF EMAIL CHECK


private function generatePassword($password){
	
	for ($i=0; $i<=31; $i++)
	 {
	  $d=rand(1,30)%2;
	  $salt .= $d ? chr(rand(65,90)) : chr(rand(48,57));
	}   
							 
	$hashed = md5($password.$salt);
	$new_password = $hashed . ':' . $salt;
	return $new_password  ;
	
} // End of generatePassword 



} // END OF CLASS


?>