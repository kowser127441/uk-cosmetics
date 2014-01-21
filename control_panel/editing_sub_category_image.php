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
	
	include('timeout.php');
?>

<?php

include('../connection.php');


$sub_category_id = mysql_escape_string($_POST['sub_category_id']);

$sql = mysql_query("SELECT pic_url FROM sub_category WHERE sub_category_id='$sub_category_id' ");
while($bg_data=mysql_fetch_array($sql))
{
	$old_bg= $bg_data['pic_url'];
}

// Removing old image
unlink($old_bg);

	   
		$structure = "SUB_CATEGORY/".$folder;
		
		

		if (!is_dir('$structure')) 
		{
			mkdir($structure,0777, true);
		}
			
			// Uploading Picture
			 $target = $structure."/"; 
			 $target = $target . basename( $_FILES['uploaded']['name']) ; 
			 $ok=1; 
			 if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
			 {
				//echo "The file ". basename( $_FILES['uploaded']['name']). " has been uploaded";
				 
				 $query= "UPDATE sub_category SET pic_url ='$target' WHERE sub_category_id='$sub_category_id'" ;
				
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
			
		
		header('Location: ' . $_SERVER['HTTP_REFERER']);
			






?>