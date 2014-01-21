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
	 var n=document.forms["myForm"]["category"].value;
  if (n==0)
  {
  alert("Please Choose a Category");
  return false;
  }
  
  	// SUb-Category velidation -
	 var n=document.forms["myForm"]["sub_category"].value;
  if (n==0)
  {
  alert("Please Choose a Sub-Category");
  return false;
  }
   	// Brand velidation -
	 var n=document.forms["myForm"]["brand"].value;
  if (n==0)
  {
  alert("Please Choose a Brand");
  return false;
  }
  
	
	// Product velidation -
 var n=document.forms["myForm"]["product_id"].value;
  if (n==0)
  {
  alert("Please Choose a Product");
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
<h2>Edit Discount</h2>

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

$product_id = $_REQUEST['product_id'];




include('../connection.php');

$query = mysql_query("SELECT * FROM product WHERE product_id='$product_id' ");
while($data=mysql_fetch_array($query))
{

$product_name= $data['product_name'];
$category_id= $data['category_id'];
//$category_name= $data['category_name'];
$sub_category_id= $data['sub_category_id'];
//$sub_category_name= $data['sub_category_name'];

$purchase_price_2=$data['purchase_price_2'];
$sale_price=$data['sale_price'];

$quantity_2=$data['quantity_2'];
$quantity_1=$data['quantity_1'];
$discount=$data['discount'];
$discount_available=$data['discount_available'];
$discount_duration=$data['discount_duration'];
$discount_date=$data['discount_date'];

	

	
}


?>


<div style=" width:600px;">

<center><h3></h3></center>

<table align="center">

<tr>
<td><b>Product Name<b> : </td>
<td><?php echo $product_name; ?></td>
</tr>


<td><b>Category <b>: </td>
            <td>
               
                <?php 
		
		$sub_sql=mysql_query("SELECT * FROM category WHERE category_id='$category_id'");
		while($sub_data=mysql_fetch_array($sub_sql))
		{
		
		$new_sub_id = $sub_data['category_id'];
		$new_sub_name = $sub_data['category_name'];
		
		?>
        
        <?php if($category_id==$new_sub_id){ echo $new_sub_name;} ?> 
        
        <?php
		}
		?>
            
            </td>
</tr>

<tr>
<td><b>Sub-Category<b> : </td>
<td>


        <?php 
		
		$sub_sql=mysql_query("SELECT * FROM sub_category WHERE category_id='$category_id'");
		while($sub_data=mysql_fetch_array($sub_sql))
		{
		
		$new_sub_id = $sub_data['sub_category_id'];
		$new_sub_name = $sub_data['sub_category_name'];
		
		?>
        
        <?php if($sub_category_id==$new_sub_id){ echo $new_sub_name;} ?> 
        
        <?php
		}
		?>

</td>
</tr>


<tr>
<td><b>Current Quantity<b> : </td>
<td><?php echo $quantity_1+$quantity_2 ; ?></td>
</tr>

<tr>
<td><b>Current Purchase Price<b> : </td>
<td><?php echo $purchase_price_2; ?></td>
</tr>

<tr>
<td><b>Current Sale Price<b> : </td>
<td><?php echo $sale_price; ?></td>
</tr>

<tr>
<td><b>Current Discount<b> : </td>
<td><?php echo $discount; ?></td>
</tr>

<tr>
<td><b>Current Discount Available<b> : </td>
<td><?php echo $discount_available; ?></td>
</tr>


<tr>
<td><b>Current Discount Duration<b> : </td>
<td><?php echo $discount_duration; ?></td>
</tr>

<tr>
<td><b>Current Discount date<b> : </td>
<td><?php echo $discount_date; ?></td>
</tr>




</table>
<br/>


<form action="editing_discount.php" method="post" name="myForm" onsubmit="return validateForm()">

<input type="hidden" name="product_id" value="<?php echo $product_id ?>" />

    <table width="500" border="0">
 
         

            <tr>
        <td><b>Discount<b> : </td>
        <td> <input type="text" name="discount" /></td>
        </tr>
          
        
        
        <tr>
        <td><b>Discount Duration<b>: </td>
        <td> <input type="text" name="discount_duration" /></td>
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