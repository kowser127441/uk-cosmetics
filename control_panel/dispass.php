<?php
ob_start();
session_start();

if (isset($_SESSION['admin_access'])) 
{
}
else
{
	header("Location:logout.php");
	}
	
// Session Time out


$inactive =600; // Set timeout period in seconds

if (isset($_SESSION['timeout'])) {
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $inactive) {
        session_destroy();
        header("Location: logout.php");
		echo "session time out";
    }
}
$_SESSION['timeout'] = time();
?>



<?php

$order_id=mysql_escape_string($_REQUEST['order_id']);
$phone='88'.urlencode($_REQUEST['moblie']);

$verification_code=mysql_escape_string($_REQUEST['verification_code']);

include '../connection.php';



$sql="UPDATE order_table SET 
        tracking_number ='$verification_code',
		status='dispass'
		WHERE order_id='$order_id'
		";



if (!mysql_query($sql))
  {
	 
	  $_SESSION['error']= 1;
	
	 // die('Error: ' . mysql_error());
  }
  
  
 else
  {
	  $_SESSION['error']= 2;
      include("../smsClass.php");
    $send_sms = new SMS();
    $send_sms->sendSms($phone , 'dispass', $order_id);
	   
  }
  
header('Location: ' . $_SERVER['HTTP_REFERER']); 
die();


?>
