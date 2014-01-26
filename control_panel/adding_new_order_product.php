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


$order_id = mysql_escape_string($_POST['order_id']);
$product_id = mysql_escape_string($_POST['product_id']);

$quantity = mysql_escape_string($_POST['quantity']);

//$image_name = mysql_escape_string($_POST['uploaded']);
//$image = mysql_escape_string($_POST['picture_url']);


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
//include('../smsClass.php');
//
//$sms = new SMS();
//
//$sms->sendSms($phone, 'cancel', $order_id);
//
//
//// End SMS


$sql="INSERT INTO orders_product 

(
order_id,
product_id,
quantity
)

VALUES
(
'$order_id',
'$product_id',
'$quantity'

)";




if (!mysql_query($sql))
  {
	 
	  $_SESSION['error']= 1;
	 
	  
  }
 else {
    $_SESSION['error']=2;
}




header('Location: ' . 'new_order.php');
die();


?>