<?php 
ob_start(); 
?>

<?php
session_start();

if (isset($_SESSION['admin_access'])) 
{
}
else
{
	header("Location:logout.php");
	}
	
include('timeout.php');
	
// Session Time out


$inactive =600; // Set timeout period in seconds

if (isset($_SESSION['timeout'])) {
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $inactive) {
        session_destroy();
        header("Location: logout.php");
		die();
		echo "session time out";
    }
}
$_SESSION['timeout'] = time();
?>



<?php
$admin_id = mysql_escape_string($_POST['admin_id']);
$old_password = mysql_escape_string($_POST['old_password']);


$new_password = mysql_escape_string($_POST['new_password']);

for ($i=0; $i<=31; $i++)
 {
  $d=rand(1,30)%2;
  $salt .= $d ? chr(rand(65,90)) : chr(rand(48,57));
}   
						 
$hashed = md5($new_password.$salt);
$new_password = $hashed . ':' . $salt;
						


include '../connection.php';


///////////////// Checking For Old Password  //////////////////////////


$query = mysql_query("Select * from admin_access WHERE admin_id='$admin_id'") ;
										
										while($data = mysql_fetch_array($query))
										{
										
										  $db_password = $data['password'];
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
										
										$pass_user = md5($old_password.$last_without);
										
										//echo 'pass+md5-'.$pass_user.'<br/>';
										
										if($pass_user == $first)
										{
										
										// OLD PASSWORD MATCHED
										
										//echo 'OLD PASSWORD MATCHED';
										
										$sql="UPDATE  admin_access SET password='$new_password' where admin_id = '$admin_id'";
										
										
										if (!mysql_query($sql))
										  {
										 
											 $_SESSION['error']= 1 ;
											 Header('Location:change_password.php ');
											 
										 
										  die('Error: ' . mysql_error());
										 
										  }
										  
										  else {
											  
											 // echo "Success";
											   $_SESSION['error']= 2 ;
											   Header('Location:change_password.php ');
											   die();
											  
											  }
										
										
										
										
										}
										
										else
										{
											// OLD PASSWORD DID NOT MATCHED
											
											$_SESSION['error']= 3 ;
											 echo "old not match";
											 Header('Location:change_password.php ');
											 die();
										
										}




/*


$result = mysql_query("SELECT * FROM admin_access WHERE admin_id ='$admin_id' AND admin_password='$old_password'");
		
		$number = mysql_num_rows($result);
		
		if( $number > 0 )
				{
				
				
				$sql="UPDATE  admin_access SET admin_password='$new_password' where admin_id = '$admin_id' AND admin_password='$old_password' ";
					
					
					if (!mysql_query($sql))
					  {
					 
					 	 $_SESSION['error']= 1 ;
	 					 Header('Location:change_password.php ');
					 
					  die('Error: ' . mysql_error());
					 
					  }
					  
					  else {
						  
						  echo "Success";
						   $_SESSION['error']= 2 ;
	 					   Header('Location:admin.php ');
						  
						  }
					
					
					

				}// return zero column 
				
				
				else { 
					
						 $_SESSION['error']= 1 ;
						 echo "old not match";
	 					 Header('Location:change_password.php ');
					
					}
				
				
*/				






?>














