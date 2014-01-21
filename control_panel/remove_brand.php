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



$brand_id = mysql_escape_string($_GET['brand_id']);




// echo $sub_category_id.'---'.$sub_category_name;


include('../connection.php');


$query ="DELETE FROM brand 

		WHERE brand_id='$brand_id'" ;

 if(!mysql_query($query))
				 {
					
					$_SESSION['error']=1 ; 
				 }
				 else
				 {
				 
				 	
					$_SESSION['error']= 2;

				 }


 header('Location: ' . $_SERVER['HTTP_REFERER']);
 die();


?>


