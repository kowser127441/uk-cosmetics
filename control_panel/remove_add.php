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



$position = mysql_escape_string($_REQUEST['position']);



include('../connection.php');


// get the file_name 

$query=mysql_query("SELECT * FROM advertaisement WHERE  position='$position'");
while($data=mysql_fetch_array($query))
{
	$picture=$data['pic_url'];
	unlink($picture);
	 
	$flash=$data['flash'];
	unlink($flash);
}





$sql="DELETE FROM advertaisement WHERE position='$position'";

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