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
    <title>Admin Panel</title>
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
			
			
			xmlhttp.open("GET","sub_product_dis.php?sub_category_id=" + sub_category_id + "&category_id="+ category_id + "&brand_id=" + brand_id ,true);
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
<h2>View Discount</h2>

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
 error_reporting(0);
 
 
 $category_id=$_POST['category'];
  $sub_category_id=$_POST['sub_category'];
 $brand_id=$_POST['brand'];
 $discount_available=$_POST['discount_available'];
 
 
 
 ?>   
    
    <br/><br/><br/>
    <form method="post"   action="view_discount.php" style="margin-left:20px"  name="myForm" onsubmit="return validateForm-duisabled()">
    
    
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
        <td><span id="bodyspan_2"> </span></td>
        </tr>
      
       
         <tr>
          <td></td>
            <td>
            <input type="submit" value="Search"  style="margin-left:100px; height:30px; width:80px; font-size:15px;">
            </td>
          </tr>
  
</table>

  
      </form>
    
    
    <h3>Products : </h3>
    
    

<table class="data display datatable" id="example" style="width:850px; magin-left:100px;">
		<thead>
			<tr>
		            <th>SL.</th>
					<th>Product Name</th>
                    <th>Category</th>
                    <th>Sub-Category</th>
                    <th>Brand</th>
					<th>Discount</th>
                    <th>Discount Available</th>
                    <th>Discount Duration</th>
                    <th>Discount Date</th>
                    <th>Picture</th>
                    <th>Action</th>
                    
                

			</tr>
		</thead>
		<tbody>
                        <?php
						
						$i = 1;
							
						
						$p_query=mysql_query("SELECT * FROM product WHERE category_id LIKE '%$category_id%' AND sub_category_id LIKE '%$sub_category_id%' AND discount_available = 'yes'");	
						while($h_data=mysql_fetch_array($p_query))
						{	
							$product_id = $h_data['product_id'];
							$category_id = $h_data['category_id'];
							$sub_category_id = $h_data['sub_category_id'];
							$brand_id = $h_data['brand_id'];
							$discount_available = $h_data['discount_available'];
							
							$pic_query=mysql_query("SELECT * FROM product WHERE product_id='$product_id'");
							while($pic=mysql_fetch_array($pic_query))
							{
								$pic_url=$pic['picture_url'];	
							}
							
							// GETTING CATEGORY NAME
							
						$cat_sql=mysql_query("SELECT category_name FROM category WHERE category_id='$category_id' ");
						while($cat_data=mysql_fetch_array($cat_sql))
						{
							$category_name=$cat_data['category_name'];	
						}
						
							// GETTING SUB-CATEGORY NAME
							
						$cat_sql=mysql_query("SELECT sub_category_name FROM sub_category WHERE sub_category_id='$sub_category_id'");
						while($cat_data=mysql_fetch_array($cat_sql))
						{
							$sub_category_name=$cat_data['sub_category_name'];	
						}
						// GETTING BRAND NAME
						$cat_sql=mysql_query("SELECT brand_name FROM brand WHERE brand_id='$brand_id'");
						while($cat_data=mysql_fetch_array($cat_sql))
						{
							$brand_name=$cat_data['brand_name'];	
						}
					
						
					?>
                    	
			<tr class="odd gradeX">

				<td><?php echo $i;?></td>
                
				<td class="center">
				<?php echo $h_data['product_name']; ?>
                </td>
                
                <td class="center">
	         <?php echo $category_name; ?>
                </td>
                
                <td class="center">
	        <?php echo $sub_category_name; ?>
                </td>
                
                 <td class="center">
		<?php echo $brand_name; ?>
                </td>
                
                
		<td class="center">
	       <?php echo $h_data['discount'].'%'; ?>
                </td>
                
                <td class="center">
		 <?php echo $h_data['discount_available']; ?>
                </td>
                
                <td class="center">
		 <?php echo $h_data['discount_duration']; ?>
                </td>
                
                <td class="center">
		<?php echo $h_data['discount_date']; ?>
                </td>
                
                <td class="center">
		 <img src="<?php echo '../control_panel/'.$pic_url; ?>" style="width:150px;" >
                    
                </td>
				
                
                 <td class="center" style="width:150px;">
                 
                  <a href="edit_discount_form.php?product_id=<?php echo $product_id; ?>"  >Edit</a> |
                  <a href="remove_discount.php?product_id=<?php echo $product_id; ?>" onClick="return confarmation()" >Remove</a>
                
                </td>
                
				
		     </tr>
			
           <?php

					 $i=$i+1;
						
						}
					
					 ?>
                        
		</tbody>
				</table>

    
    
    
    

	</div>



    
    
    

</div>

  </body>
</html>