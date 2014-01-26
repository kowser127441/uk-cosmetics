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

$sub_category_id = mysql_escape_string($_POST['sub_category_id']);
$discount = mysql_escape_string($_POST['discount']);
$duration = mysql_escape_string($_POST['duration']);
$date = date('Y-m-d H:i:s');

include('../connection.php');

$query ="UPDATE  product SET  discount_available='yes', discount='$discount' , discount_duration='$duration', discount_date='$date' WHERE sub_category_id='$sub_category_id'" ;

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


