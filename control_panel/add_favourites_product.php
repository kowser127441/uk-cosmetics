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
			
			
			xmlhttp.open("GET","sub_product.php?sub_category_id=" + sub_category_id + "&category_id="+ category_id + "&brand_id=" + brand_id ,true);
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
   include("add_menu.php");
   ?>


</div>


<!--Contents-->

<div class="content">
<center>
<h2>ADD FAVOURITE PRODUCT</h2>

</center>

 <?php
			include("add_sidebutton.php");
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
	 include('../connection.php');
	 
	 $frm_database = array(0);
     
 $query = mysql_query("SELECT position FROM favourites");
 while($p_data=mysql_fetch_array($query))
 {
	 $frm_database[] = $p_data[0];
 }

 $all = array(1,2,3,4,5,6,7,8,9,10);
 
 $available = array_diff( $all , $frm_database);
 
	 
	 
	 ?>
    
 <?php
 error_reporting(0);

// $category_id=$_POST['category'];
//  $sub_category_id=$_POST['sub_category'];
// $brand_id=$_POST['brand'];
 
 
 
 ?>   
    
    <br/><br/><br/>
    <form method="post"   action="adding_favourites_product.php" style="margin-left:20px"  name="myForm" onsubmit="return validateForm-duisabled()">
    
    
    <table width="500" border="0">
 
         
         <tr>
        <td>Choose Category :</td>
        <td>
        
        <select  name="category" id="body" onchange="changecategory()" >
					<option value="0">---Select Category---</option>
							 <?php
							 
							 include '../connection.php';
							 
					  $sql=mysql_query("select * from category ");
					  $row=mysql_num_rows($sql);
					  if($row>0){
						  while($row=mysql_fetch_array($sql)){
					 ?>
		         	  <option value="<?php echo $row['category_id'];?>"><?php echo $row['category_name'];?></option>
		         	<?php
						  }
					  }
			?>
				 </select>
        
        </td>
        </tr>
         <tr>
        <td>Sub Category : </td>
        <td><span id="bodyspan">
       
         </span></td>
        </tr>
       
         <tr>
        <td>Brand : </td>
        <td>
        <select  name="brand" id="brand" onchange="changecategory2()" >
					<option value="0">---Select Brand---</option>
							 <?php
							 
							 include '../connection.php';
							 
					  $sql=mysql_query("select * from brand ");
					  $row=mysql_num_rows($sql);
					  if($row>0){
						  while($row=mysql_fetch_array($sql)){
					 ?>
		         	  <option value="<?php echo $row['brand_id'];?>"><?php echo $row['brand_name'];?></option>
		         	<?php
						  }
					  }
			?>
				 </select>
        
        
        
        
        
        
        </td>
        </tr>
       
       
        
     <tr>
        <td>Product Name : </td>
        <td><span id="bodyspan_2"></span></td>
        </tr>
        <tr>
        <td>Select Position : </td>
        <td>
        <select name="position">
        <option value="0">--- Select Position ---- </option>
       
       <?php
       foreach($available as $key)
	   {
	   ?>
       <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
	   <?php
	   }
	   ?>
        </select>
        </td>
        </tr>
          <tr>
           <td>
            <!--style=" visibility:hidden"-->
            <span id="add" >
            <input type="submit" value="Add"  style="height:30px; width:80px; font-size:15px;">
            </span>
            </td>
          </tr>
  
</table>

  
      </form>
    

	</div>
    

</div>

  </body>
</html>