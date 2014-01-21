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

// DERECTORY DELETE FUNCTION

function rrmdir($dir) { 
   if (is_dir($dir)) { 
     $objects = scandir($dir); 
     foreach ($objects as $object) { 
       if ($object != "." && $object != "..") { 
         if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object); 
       } 
     } 
     reset($objects); 
     rmdir($dir); 
   } 
 }




$product_id=mysql_escape_string($_REQUEST['product_id']);

include('../connection.php');

$sql = mysql_query("SELECT * FROM product WHERE product_id='$product_id'");
while($p_data=mysql_fetch_array($sql))
{
	$category_id=$p_data['category_id'];
	$sub_category_id=$p_data['sub_category_id'];
	$discount=$data['discount'];
    $discount_available=$data['discount_available'];
    $discount_duration=$data['discount_duration'];
    $discount_date=$data['discount_date'];
		
}

$url ="PICTURE/".$category_id."/".$sub_category_id."/".$product_id ; 





$query ="UPDATE product SET 
		discount=0,
		discount_available='no',
		discount_duration='NULL'
		
		WHERE product_id='$product_id'" ;


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