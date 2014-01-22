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
$order_id = mysql_escape_string($_POST['order_id']);
$product_id = mysql_escape_string($_POST['product_id']);
$quantity = mysql_escape_string($_POST['quantity']);

//// SMS start
//
//// get Emai
// $esql = mysql_query("SELECT user_id FROM order_table WHERE order_id='$order_id'");
//            while($edata=  mysql_fetch_array($esql)){
//                $email = $edata[0];
//            }
//
//
//            $sql = mysql_query("SELECT mobile FROM user WHERE email='$email'");
//            while($data=  mysql_fetch_array($sql)){
//                $phone = '88'.$data[0];
//            }
//
////include('../smsClass.php');
//
//$sms = new SMS();
//
//$sms->sendSms($phone, 'cancel', $order_id);
//
//
//// End SMS


include('../connection.php');


$query ="UPDATE orders_product SET quantity= '$quantity' WHERE product_id='$product_id' " ;

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