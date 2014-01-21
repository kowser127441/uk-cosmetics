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

$sub_category = mysql_escape_string($_POST['sub_category']);
$type = mysql_escape_string($_POST['type_name']);



include '../connection.php';


$sql="INSERT INTO product_type (sub_category_id,type_name)
VALUES
('$sub_category','$type')";



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
die();


?>