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

$category_id= mysql_escape_string($_REQUEST['category_id']);
$position = mysql_escape_string($_REQUEST['position']);
$pic_url = mysql_escape_string($_REQUEST['pic_url']);



include('../connection.php');




$sql="DELETE FROM category_slider_image WHERE position='$position' AND category_id='$category_id' ";

if (!mysql_query($sql))
  {
	 
	  $_SESSION['error']= 1;
	 
  //die('Error: ' . mysql_error());
  }
  
  
 else
  {
	  unlink($pic_url);
	  $_SESSION['error']= 2;
	  
  }
  
header('Location: ' . $_SERVER['HTTP_REFERER']);




?>