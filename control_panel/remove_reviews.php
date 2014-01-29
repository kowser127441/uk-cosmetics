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

?>
<?php


$review_id = mysql_escape_string($_REQUEST['review_id']);




include('../connection.php');




$sql="DELETE FROM reviews WHERE review_id='$review_id'";

if (!mysql_query($sql))
  {
	 
	  $_SESSION['error']= 1;
	 
  //die('Error: ' . mysql_error());
  }
  
  
 else
  {
	
	  $_SESSION['error']= 2;
	  
  }
  
header('Location: ' . $_SERVER['HTTP_REFERER']);




?>