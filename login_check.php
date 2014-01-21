<?php
ob_start();

error_reporting(0);

session_start();
?>
<?php

if(isset($_POST['email']) && isset($_POST['password']))
{
	$email = mysql_escape_string($_POST['email']);
	$password = mysql_escape_string($_POST['password']);
	
	require('loginClass.php');
	
	$login = new Login($email, $password);
	
	if($login->loginCheck() == true)
	{
		if(isset($_SESSION['checkout']))
		{
		
		header('Location: cart.php');
		die();
		
		}
		
		else
		{
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			die();	
		}
		
		
	}
	
	else{
		
		header('Location: ' . $_SERVER['HTTP_REFERER']);	
		die();
		
	}
	
}

else // DATA MISSING
{
	$_SESSION['user_access_error']='User Email or Password is missing !';
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	die();
	
}



?>