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

$category = mysql_escape_string($_POST['category']);
$sub_name = mysql_escape_string($_POST['sub_name']);



include '../connection.php';


$sql="INSERT INTO sub_category (category_id,sub_category_name)
VALUES
('$category','$sub_name')";



if (!mysql_query($sql))
  {
	 
	  $_SESSION['error']= 1;
	 
  //die('Error: ' . mysql_error());
  }
  
  
 else
  {
	   $sub_category_id=mysql_insert_id();
	   // Creating New Folder If not Exist
		$folder = $sub_category_id;
		
		$structure = "SUB_CATEGORY/".$folder;
		

		if (!is_dir('$structure')) 
		{
			mkdir($structure,0777, true);
		}
		 $target = $structure."/"; 
			 $target = $target . basename( $_FILES['uploaded']['name']) ; 
			 $ok=1; 
			 if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
			 {
				//echo "The file ". basename( $_FILES['uploaded']['name']). " has been uploaded";
				 
				 $query="UPDATE  sub_category SET pic_url='$target' WHERE sub_category_id='$sub_category_id'";
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
  

header('Location: ' . $_SERVER['HTTP_REFERER']);
die();


?>