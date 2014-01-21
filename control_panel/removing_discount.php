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



$product_id = mysql_escape_string($_POST['product_id']);




// echo $sub_category_id.'---'.$sub_category_name;


include('../connection.php');


$query ="UPDATE product SET 
		discount=0,
		discount_available='no'
		
		WHERE product_id='$product_id'" ;

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


