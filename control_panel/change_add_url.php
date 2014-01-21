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

$position = mysql_escape_string($_POST['position']);
$url = mysql_escape_string($_POST['url']);

echo $old_position.'---'.$new_position;



// echo $sub_category_id.'---'.$sub_category_name;


include('../connection.php');


$query ="UPDATE advertaisement SET url= '$url' WHERE position='$position' " ;

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