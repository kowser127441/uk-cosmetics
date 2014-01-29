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


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel-All Sky Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="css/super_admin.css" />
     <link href="css/bootstrap.css" rel="stylesheet">
    
   
   
    <!-- Form Velidation--> 
    
 <script type="text/javascript">
function validateForm()
{
	
	// Category velidation -
	 var n=document.forms["myForm"]["comments"].value;
  if (n==null||n==0)
  {
  alert("Please write Something as Comment");
  return false;
  }
  
  	// SUb-Category velidation -
	 var n=document.forms["myForm"]["headline"].value;
  if (n==null||n==0)
  {
  alert("Please Give a headline");
  return false;
  }
  
  

  
  
}
</script>
 
 
 <script language="javascript">

function changecategory()
		{
			
			  var xmlhttp;
			  if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			  
			  else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			  if(window.XMLHttpRequest)
				{
					xmlhttp = new XMLHttpRequest();
				}
			else
				{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
			xmlhttp.onreadystatechange = function()
				{
					if(xmlhttp.readyState==4 )
						{
							document.getElementById("bodyspan").innerHTML=xmlhttp.responseText;
						}
				}
			var bodySelect = document.getElementById("body").value;
			xmlhttp.open("GET","sub_category.php?category_id=" + bodySelect,true);
			xmlhttp.send();	

		}


function changecategory2()
		{
			
			  var xmlhttp;
			  if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			  
			  else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			  if(window.XMLHttpRequest)
				{
					xmlhttp = new XMLHttpRequest();
				}
			else
				{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
			xmlhttp.onreadystatechange = function()
				{
					if(xmlhttp.readyState==4 )
						{
							document.getElementById("bodyspan_2").innerHTML=xmlhttp.responseText;
						}
				}
			var sub_category_id = document.getElementById("body_2").value;
			var category_id = document.getElementById("body").value;
			var brand_id = document.getElementById("brand").value;
			
			
			xmlhttp.open("GET","sub_product_home.php?sub_category_id=" + sub_category_id + "&category_id="+ category_id + "&brand_id=" + brand_id ,true);
			xmlhttp.send();	

		}





</script>
 
 
 
  <!-- Table Start -->

<link rel="stylesheet" href="css-table/text.css" type="text/css" media="screen" title="no title" />
<link rel="stylesheet" href="css-table/layout.css" type="text/css" media="screen" title="no title" />	
<link rel="stylesheet" href="css-table/plugin/dataTables.css" type="text/css" media="screen" title="no title" />
<link rel="stylesheet" href="css-table/custom.css" type="text/css" media="screen" title="no title">




<script src="js-table/jquery/jquery-1.5.2.min.js"></script>
<script src="js-table/jquery/facebox.js"></script>
<script src="js-table/jquery/jquery.dataTables.min.js"></script>  <!-- it's for search display and work-->
<script src="js-table/dashboard.js"></script>   <!-- it's for search display and work-->

<script>
	
$(document).ready ( function () 
{
	Dashboard.init ();
});

</script>

<!-- Table END -->
 
 
 <script type="text/javascript">
// Delete Confirmation

function confarmation()
{
var r=confirm("Are you sure you want to delete ?");
if (r==true)
{
//User Pressed okay. Delete

return true;

}
else
{
	return false;
//user pressed cancel. Do nothing
    }
 }
 
 </script>
 
 

</head>

  <body>

   <div class="header">
<img src="images/logo.png" class="logo" />




</div>

<div class="divider">

</div>
<!--Main Menu-->

<div class="menu">

 <?php
   include("view_menu.php");
   ?>


</div>


<!--Contents-->

<div class="content">
<center>
<h2>Edit Review</h2>

</center>

 <?php
			include("view_sidebutton.php");
	?>
    
    
     <div style="width:850px; margin-left:auto; margin-right:auto;">
    
   <center> <?php 
   if(isset($_SESSION['error']))
   
   {
	   
	   if($_SESSION['error']==1){
	   
	   echo "Not Successfully Updated <br/> Reason : Product Already Exists .";
	   }
	   
	   elseif($_SESSION['error']==2) {
		   
		   echo "Successfully Updated";
		   }
	   
	   } 
	   unset($_SESSION['error']);
	   
	   ?>
     </center>
    





















<?php 

$review_id = $_REQUEST['review_id'];




include('../connection.php');

$query = mysql_query("SELECT * FROM reviews WHERE review_id='$review_id' ");
while($h_data=mysql_fetch_array($query))
{

$product_id = $h_data['product_id'];
$review_id = $h_data['review_id'];
$headline = $h_data['headline'];
$comment = $h_data['comments'];
$nickname = $h_data['nickname'];
$location = $h_data['location'];

// GETTING Product NAME
							
$cat_sql=mysql_query("SELECT product_name FROM product WHERE product_id='$product_id' ");
while($cat_data=mysql_fetch_array($cat_sql))
  { 
       $product_name=$cat_data['product_name'];	
  }
						
	

	
}


?>


<div style=" width:600px;">

<center><h3></h3></center>

<table align="center">

<tr>
<td><b>Product Name<b> : </td>
<td><?php echo $product_name; ?></td>
</tr>




<tr>
<td><b>Current Headline<b> : </td>
<td><?php echo $headline ; ?></td>
</tr>

<tr>
<td><b>Name OF Reviewer<b> : </td>
<td><?php echo $nickname; ?></td>
</tr>

<tr>
<td><b>Review From <b> : </td>
<td><?php echo $location; ?></td>
</tr>

<tr>
<td><b>Review  <b> : </td>
            <td><textarea style="width: 300px;height: 50px" readonly="readonly"><?php echo $comment; ?></textarea></td>
</tr>




</table>
<br/>


<form action="editing_review.php" method="post" name="myForm" onsubmit="return validateForm()">

<input type="hidden" name="review_id" value="<?php echo $review_id ?>" />

    <table width="500" border="0">
 
         

            <tr>
        <td><b>Edit Comment<b> : </td>
         <td><textarea style="width: 400px;height: 50px" name="comments"></textarea></td>
        </tr>
          
        
        
        <tr>
        <td><b>Edit Headline<b>: </td>
        <td> <input type="text" name="headline" /></td>
        </tr>
          
       
        
       <tr><td></td><td><input type="submit" value="Update" /></td>
       </tr>  
 
</table>



</form>

</div>
</div>
</div>
</body>
</head>