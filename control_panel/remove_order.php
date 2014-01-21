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
include('../connection.php');
$order_id=$_REQUEST['order_id'];

// SMS start

// get Emai
 $esql = mysql_query("SELECT user_id FROM order_table WHERE order_id='$order_id'");
            while($edata=  mysql_fetch_array($esql)){
                $email = $edata[0];
            }


            $sql = mysql_query("SELECT mobile FROM user WHERE email='$email'");
            while($data=  mysql_fetch_array($sql)){
                $phone = '88'.$data[0];
            }

include('../smsClass.php');

$sms = new SMS();

$sms->sendSms($phone, 'cancel', $order_id);


// End SMS





$query ="DELETE FROM order_table WHERE  order_id='$order_id'" ;

 if(!mysql_query($query))
				 {
					
					$_SESSION['error']=1 ; 
				 }
				 else
				 {	
				 			$_SESSION['error']= 2; 
				
				 }
				 
				 echo mysql_error();





header('Location: ' . $_SERVER['HTTP_REFERER']);
die();




?>