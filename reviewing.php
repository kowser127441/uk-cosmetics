<?php
ob_start();
session_start();

include 'connection.php';

$product_id = mysql_escape_string($_POST['product_id']);
$headline = mysql_escape_string($_POST['headline']);
$rating = mysql_escape_string($_POST['rating']);
$comment = mysql_escape_string($_POST['comment']);
$nickname= mysql_escape_string($_POST['nickname']);
$location = mysql_escape_string($_POST['location']);
$date = date('Y-m-d H:i:s');




$sql="INSERT INTO reviews

(
product_id,
headline,
rating,
comments,
nickname,
location,
date
)

VALUES
(
'$product_id',
'$headline',
'$rating',
'$comment',
'$nickname',
'$location',
'$date'
)";




if (!mysql_query($sql))
  {
	 
	  $_SESSION['error']= 1;
       $_SESSION['status']= mysql_error();

	 // echo mysql_error();
      
      
	  
  //die('Error: ' . mysql_error());
  }
 else
  {
	 	$_SESSION['error']= 2;
         $_SESSION['status']= 'Review Added Successfully';
		
}
  


//header('Location: ' . $_SERVER['HTTP_REFERER']);
header('Location: view_product.php?product_id='.$product_id);
die();




?>