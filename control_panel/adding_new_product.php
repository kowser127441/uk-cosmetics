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


$category = mysql_escape_string($_POST['category']);
$sub_category = mysql_escape_string($_POST['sub_category']);
$Type = mysql_escape_string($_POST['Type']);
$brand = mysql_escape_string($_POST['brand']);
$product_name = mysql_escape_string($_POST['name']);
$product_code= mysql_escape_string($_POST['product_code']);
$purchaseprice = mysql_escape_string($_POST['purchase_price_1']);
$sale_price = mysql_escape_string($_POST['sale_price']);
$quantity_1 = mysql_escape_string($_POST['quantity_1']);
$details = mysql_escape_string($_POST['details']);
// $terms= mysql_escape_string($_POST['terms']);
$buypoint= mysql_escape_string($_POST['buy_point']);
$earnpoint= mysql_escape_string($_POST['earn_point']);
$size = mysql_escape_string($_POST['size']);
$color = mysql_escape_string($_POST['color']);

//$image_name = mysql_escape_string($_POST['uploaded']);
//$image = mysql_escape_string($_POST['picture_url']);


$sql="INSERT INTO product 

(
product_name,
category_id,
sub_category_id,
type_id,
brand_id,
product_code,
details,
purchase_price_1,
sale_price,
quantity_1,
buy_point,
earn_point,
size,
color
)

VALUES
(
'$product_name',
'$category',
'$sub_category',
'$Type',
'$brand',
'$product_code',
'$details',
'$purchaseprice',
'$sale_price',
'$quantity_1',
'$buypoint',
'$earnpoint',
'$size',
'$color'

)";




if (!mysql_query($sql))
  {
	 
	  $_SESSION['error']= 1;

	 
	  
  die('Error: ' . mysql_error());
  }
  
  
 else
  {
	  $product_id=mysql_insert_id();
	  
	  
		
		// Creating New Folder If not Exist
		$folder = $category."/".$sub_category."/".$product_id;
		
		$structure = "PICTURE/".$folder;
		
		//echo $structure;
		//mkdir($structure,0777, true);
		

		if (!is_dir('$structure')) 
		{
			mkdir($structure,0777, true);
			
			
			// Uploading Picture
			
			
			
			 $target = $structure."/"; 
			 $target = $target . basename( $_FILES['uploaded']['name']) ; 
			 $ok=1; 
			 if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
			 {
				//echo "The file ". basename( $_FILES['uploaded']['name']). " has been uploaded";
				 
				 $query="UPDATE  product SET picture_url='$target' WHERE product_id='$product_id'";
				 if(!mysql_query($query))
				 {
					$_SESSION['error']=1 ; 
				 }
				 else
				 {
				 
					$_SESSION['error']= 2;

				 }
			 } 
			 else
			  {
				  $_SESSION['error']= 1;
			 		echo "Sorry, there was a problem uploading your file.";
			 }
			
			
			
		}
		
		else {
			
			}
			
			
		
			  
	  
	 
	  
  }




header('Location: ' . $_SERVER['HTTP_REFERER']);
die();


?>