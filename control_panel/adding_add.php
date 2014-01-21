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

	
// Session Time out


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


$add_type = mysql_escape_string($_POST['add_type']);
$position = mysql_escape_string($_POST['position']);

$height = mysql_escape_string($_POST['height']);
$url = mysql_escape_string($_POST['url']);


include '../connection.php';


// WHEN IMAGE
if($add_type==1)
{

$sql="INSERT INTO advertaisement (position,url)
	VALUES
	('$position','$url')";
	
// END OF SQL 

if (!mysql_query($sql))
  {
	 
	  $_SESSION['error']= 1;
	 
  //die('Error: ' . mysql_error());
  }
  
  
 else
  {
	 
	  $_SESSION['error']= 2;
	  
	  // Creating New Folder If not Exist
		$folder = $position;
		$structure = 'ADD_PICTURE/'.$folder;
		
		if (!is_dir('$structure')) 
		{
			mkdir($structure,0777,true);
			
		}
				
		else
		 {
			//echo 'exist';
		 }
		 
					 // Uploading Picture
					
					
					 $target = $structure.'/'; 
					 $target = $target . basename( $_FILES['uploaded']['name']) ; 
					 $ok=1; 
					 if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
					 {
					
					 mysql_query("UPDATE  advertaisement SET pic_url = '$target' , code='null' , flash='null' WHERE position='$position'");
					
						//echo "The file ". basename( $_FILES['uploaded']['name'])." has been uploaded";
					 } 
					 else {
					// echo "Sorry, there was a problem uploading your file.";
					 }
					//END OF UPOADING PICTURE
	  
		 
		 
	  
	 
	  
  }
 
}

// END IMAGE

// WHEN CODE
elseif($add_type==2)
{

$code = mysql_escape_string($_POST['code']);

$sql="INSERT INTO advertaisement (position,pic_url,code,flash)
	VALUES
	('$position','null','$code','null')";
	
// END OF SQL 

if (!mysql_query($sql))
  {
	 
	  $_SESSION['error']= 1;
	 
  //die('Error: ' . mysql_error());
  }
  
  
 else
  {
	 
	  $_SESSION['error']= 2;
	  
  }

}



// WHEN FLASH
elseif($add_type==3)
{

$sql="INSERT INTO advertaisement (position,height)
	VALUES
	('$position','$height')";
	
// END OF SQL 

if (!mysql_query($sql))
  {
	 
	  $_SESSION['error']= 1;
	 
  //die('Error: ' . mysql_error());
  }
  
  
 else
  {
	 
	  $_SESSION['error']= 2;
	  
	  // Creating New Folder If not Exist
		$folder = $position;
		$structure = 'FLASH/'.$folder;
		
		if (!is_dir('$structure')) 
		{
			mkdir($structure,0777,true);
			
		}
				
		else
		 {
			//echo 'exist';
		 }
		 
					 // Uploading Flash
					
					
					 $target = $structure.'/'; 
					 $target = $target . basename( $_FILES['uploaded']['name']) ; 
					 $ok=1; 
					 if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
					 {
					
					 mysql_query("UPDATE  advertaisement SET flash = '$target' , pic_url='null' , code='null' WHERE position='$position'");
					
						//echo "The file ". basename( $_FILES['uploaded']['name'])." has been uploaded";
					 } 
					 else {
					// echo "Sorry, there was a problem uploading your file.";
					 }
					//END OF UPOADING PICTURE
	  
		 
		 
	  
	 
	  
  }
 
}








 
header('Location: ' . $_SERVER['HTTP_REFERER']);
die();


?>