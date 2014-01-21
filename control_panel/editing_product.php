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
$product_code = mysql_escape_string($_POST['product_code']);
$details = mysql_escape_string($_POST['details']);
$terms = mysql_escape_string($_POST['terms']);
$purchase_price_1 = mysql_escape_string($_POST['purchase_price_1']);
$sale_price = mysql_escape_string($_POST['sale_price']);
$size = mysql_escape_string($_POST['size']);
$color = mysql_escape_string($_POST['color']);
$buy_point = mysql_escape_string($_POST['buy_point']);
$sell_point = mysql_escape_string($_POST['sell_point']);
$sub_category_id = mysql_escape_string($_POST['sub_category_id']);

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
		product_name='$product_name',
        product_code='$product_code',
		details='$details',
		terms='$terms',
		purchase_price_1='$purchase_price_1',
		sale_price='$sale_price',
		size='$size',
		color='$color',
		buy_point='$buy_point',
		earn_point='$sell_point',
    	sub_category_id='$sub_category_id'
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


