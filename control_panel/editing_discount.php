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

$discount = mysql_escape_string($_POST['discount']);

$discount_duration = mysql_escape_string($_POST['discount_duration']);


/*

 echo 'pro-id-'.$product_id.'<br/>';
  echo 'pro-id-'.$product_name.'<br/>';
   echo 'pro-id-'.$details.'<br/>';
   
    echo 'pro-id-'.$terms.'<br/>';
	 echo 'pro-id-'.$purchase_price_1.'<br/>';
	  echo 'pro-id-'.$sale_price.'<br/>';
	   echo 'pro-id-'.$size.'<br/>';
	    echo 'pro-id-'.$color.'<br/>';
		 echo 'pro-id-'.$buy_point.'<br/>';
		  echo 'sell-'.$sell_point.'<br/>';
		  

*/
include('../connection.php');


$query = "UPDATE product SET 
		discount='$discount',
		discount_duration='$discount_duration'
		
		
		WHERE product_id='$product_id'" ;

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


