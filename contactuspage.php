<?php

include 'connection.php';

$title = mysql_escape_string($_POST['title']);
$name = mysql_escape_string($_POST['name']);
$email = mysql_escape_string($_POST['email']);
$contact_number = mysql_escape_string($_POST['contact_number']);
$address= mysql_escape_string($_POST['address']);
$reasonofcontact = mysql_escape_string($_POST['reasonofcontact']);
$ordernumber = mysql_escape_string($_POST['ordernumber']);
$nameofproduct = mysql_escape_string($_POST['nameofproduct']);
$detailsquery = mysql_escape_string($_POST['detailsquery']);





$sql="INSERT INTO contact

(
title,
name,
email,
contact_number,
address,
reasonofcontact,
ordernumber,
nameofproduct,
detailsquery
)

VALUES
(
'$title',
'$name',
'$email',
'$contact_number',
'$address',
'$reasonofcontact',
'$ordernumber',
'$nameofproduct',
'$detailsquery'
)";




if (!mysql_query($sql))
  {
	 
	  $_SESSION['error']= 1;

	 
	  
  //die('Error: ' . mysql_error());
  }
 else
  {
	 	$_SESSION['error']= 2;
		
		
         
   }
   echo "mysql_error()";


header('Location: ' . $_SERVER['HTTP_REFERER']);
die();




?>