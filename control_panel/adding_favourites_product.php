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
//session_start();
include '../connection.php';


$category = mysql_escape_string($_POST['category']);
$sub_category = mysql_escape_string($_POST['sub_category']);
$brand = mysql_escape_string($_POST['brand']);
$product_id = mysql_escape_string($_POST['product_id']);
$position =mysql_escape_string($_POST['position']);

//$image_name = mysql_escape_string($_POST['uploaded']);
//$image = mysql_escape_string($_POST['picture_url']);


$sql="INSERT INTO favourites

(
product_id,
category_id,
sub_category_id,
brand_id,
position
)

VALUES
(
'$product_id',
'$category',
'$sub_category',
'$brand',
'$position'

)";




if (!mysql_query($sql))
  {
	 
	  $_SESSION['error']= 1;

	 
	  
 
  }
  
  
 else
  {
	 
	$_SESSION['error']= 2;	
			  
  }




header('Location: ' . $_SERVER['HTTP_REFERER']);
die();


?>