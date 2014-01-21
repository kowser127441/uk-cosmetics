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

include('../connection.php');


$position = mysql_escape_string($_POST['position']);
$title =  mysql_escape_string($_POST['title']);
$details =  mysql_escape_string($_POST['editor1']);
$sort_details1 =  mysql_escape_string($_POST['details1']);
$sort_details2 =  mysql_escape_string($_POST['details2']);


$link1 =  mysql_escape_string($_POST['link1']);
$link2 =  mysql_escape_string($_POST['link2']);


$pic_query= mysql_query("SELECT pic_url FROM random_details WHERE position='$position'");
while($data= mysql_fetch_array($pic_query))
{
	$old_pic_url = $data['pic_url'];
	
}
unlink($old_pic_url);


$structure = "RANDOME_IMAGE/".$position;
		
		

		if (!is_dir('$structure')) 
		{
			mkdir($structure,0777, true);
		}
			
			// Uploading Picture
			 $target = $structure."/"; 
			 $target = $target . basename( $_FILES['uploaded']['name']) ; 
			 
			 if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
			 {
				//echo "The file ". basename( $_FILES['uploaded']['name']). " has been uploaded";
				 
				 $query= "UPDATE random_details SET title='$title' , details='$details' , sort_details1='$sort_details1', sort_details2 = '$sort_details2' ,link1= '$link1',link2='$link2', pic_url = '$target' WHERE position = '$position'" ;
				
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
			
		echo mysql_error();
		header('Location: ' . $_SERVER['HTTP_REFERER']);
			die();






?>