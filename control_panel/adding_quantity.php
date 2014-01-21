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
$product_name = mysql_escape_string($_POST['product_name']);

$purchase_price_2 = mysql_escape_string($_POST['purchase_price_2']);
$sale_price = mysql_escape_string($_POST['sale_price']);

$quantity_2 = mysql_escape_string($_POST['quantity_2']);

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
		
		quantity_2='$quantity_2',

		purchase_price_2='$purchase_price_2',
		sale_price='$sale_price'
		
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


