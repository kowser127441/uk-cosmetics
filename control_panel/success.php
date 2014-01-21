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
$phone= '88'.mysql_escape_string($_REQUEST['mobile']);
$verification_code=mysql_escape_string($_REQUEST['verification_code']);

include '../connection.php';



$sql="UPDATE order_table SET 
        tracking_number ='$verification_code',
		status='success'
		WHERE order_id='$order_id'
		";



if (!mysql_query($sql))
  {
	 
	  $_SESSION['error']= 1;
	
	 // die('Error: ' . mysql_error());
  }
  
  
 else
  {
	  // Getting Earn POint
      
	  $total_earn_point = 0 ;
	  
	 $earn_point_sql = mysql_query("SELECT * FROM order_table WHERE order_id='$order_id'");
		while($data=mysql_fetch_array($earn_point_sql))
			{
				$order_id=$data['order_id'];
				$user_email=$data['user_id'];
				$payment_type=$data['payment_type'];
				
				$item= mysql_query("SELECT * FROM orders_product WHERE order_id='$order_id' ");
				while($data2=mysql_fetch_array($item))
				{
				 	$product_id=$data2['product_id'];
					$quantity=$data2['quantity'];
					
					$p_sql= mysql_query("SELECT * FROM product WHERE product_id	='$product_id' ");
						while($data3=mysql_fetch_array($p_sql))
						{
							
							$earn_point=$data3['earn_point'];
						}
						
						$p_earn_point = $quantity * $earn_point;
                        
                        $total_earn_point = $total_earn_point + $p_earn_point ; 
                        
                       // echo $p_earn_point.'<br/>'; 
						
				 }
				 
				 
			}
	  
	  
	  if($payment_type =='cash')
	  {
		//echo $total_earn_point;
        
       
        
		  $update = "UPDATE user SET earn_point=earn_point+'$total_earn_point' WHERE email='$user_email'";
		  if(!mysql_query($update))
		  {
		 	 $_SESSION['error']= 1;
		  }
		  else
		  {
		 	 $_SESSION['error']= 2;
              include("../smsClass.php");
              $send_sms = new SMS();
              $send_sms->sendSms($phone , 'success', $order_id);
		  }
          
         
	  }
	   
  }
  
header('Location: ' . $_SERVER['HTTP_REFERER']); 
die();


?>
