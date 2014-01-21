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
		
}

$url ="PICTURE/".$category_id."/".$sub_category_id."/".$product_id ; 




$query ="DELETE FROM product WHERE product_id='$product_id'" ;

 if(!mysql_query($query))
				 {
					
					$_SESSION['error']=1 ; 
				 }
				 else
				 {
				
				mysql_query("DELETE FROM picture WHERE product_id='$product_id'");
					
					rrmdir($url); 
				 //unlink($url);
				 
				 mysql_query("DELETE FROM home_page_product WHERE product_id='$product_id'");
				 
				 $_SESSION['error']= 2; 
				
				 }
				 
				 echo mysql_error();



header('Location: ' . $_SERVER['HTTP_REFERER']);
die();





?>