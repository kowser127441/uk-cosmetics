<?php 
ob_start();
session_start();

$user_email = $_SESSION['user_email'];



include('connection.php');
?>
<?php 
//$user_name = $_POST['user_name'];
//$user_name = mysql_escape_string($_POST['user_name']);
//$user_email = mysql_escape_string($_POST['email']);
$first_name=mysql_escape_string($_POST['first_name']);
$last_name=mysql_escape_string($_POST['last_name']);
$mobile = mysql_escape_string($_POST['mobile']);
$house = mysql_escape_string($_POST['house']);
$country = mysql_escape_string($_POST['country']);
$address = mysql_escape_string($_POST['address']);
$town = mysql_escape_string($_POST['town']);
$post_code = mysql_escape_string($_POST['post_code']);
$prefered_contact = mysql_escape_string($_POST['prefered_contact']);

$query = "UPDATE user SET 

		
		
		first_name='$first_name',
		last_name='$last_name',
		mobile='$mobile',
		house='$mobile',
		country='$country',
	    address='$address',
		town='$town',
		post_code='$post_code',
		prefered_contact='$prefered_contact'
		
		
		WHERE email='$user_email'" ;

 if(!mysql_query($query))
				 {
					
					$_SESSION['error']=1 ; 
				 }
				 else
				 {
				 
				 	$_SESSION['user_name']=$last_name;
		            $_SESSION['user_full_name']=$first_name.' '.$last_name;
					$_SESSION['error']= 2;

				 }

echo mysql_error();
header('Location: ' . $_SERVER['HTTP_REFERER']);
die();



?>