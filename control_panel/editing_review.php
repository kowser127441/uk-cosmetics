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
?>

<?php



$review_id = mysql_escape_string($_POST['review_id']);

$comments = mysql_escape_string($_POST['comments']);

$headline = mysql_escape_string($_POST['headline']);



include('../connection.php');


$query = "UPDATE reviews SET 
		comments='$comments',
		headline='$headline'
		
		
		WHERE review_id='$review_id'" ;

 if(!mysql_query($query))
				 {
					
					$_SESSION['error']=1 ; 
				 }
				 else
				 {
				 
				 	
					$_SESSION['error']= 2;

				 }

//echo mysql_error();
header('Location: ' . $_SERVER['HTTP_REFERER']);
die();

?>


