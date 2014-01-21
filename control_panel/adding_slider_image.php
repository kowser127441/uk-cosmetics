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

$position = mysql_escape_string($_POST['position']);

$structure = "SLIDER_IMAGE/".$position;
		
		

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
				 
				 $query= "INSERT INTO slider_image (position,pic_url) VALUES ('$position','$target')" ;
				
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