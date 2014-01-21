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
<h2>View Reviews</h2>

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
 
 
 $product_id=$_POST['product_id'];

 
 
 
 ?>   
    
    <br/><br/><br/>
    <form method="post"   action="view_reviews.php" style="margin-left:20px"  name="myForm" onsubmit="return validateForm-duisabled()">
    
    
    <table width="500" border="0">
 
         
        
        
       
							 <?php
							 
							 include '../connection.php';
							 
					  $sql=mysql_query("select * from product ");
					  $row=mysql_num_rows($sql);
					  if($row>0){
						  while($row=mysql_fetch_array($sql)){
					 
						  }
					  }
			?>
		
        
        
        
        
        
        
        </td>
        </tr>
       
       
        
    <!-- <tr>
        <td>Product Name : </td>
        <td><span id="bodyspan_2"> </span></td>
        </tr>
      -->
       
        
  
</table>

  
      </form>
    
    
    <h3>Reviews : </h3>
    
    

<table class="data display datatable" id="example" style="width:850px; magin-left:100px;">
		<thead>
			<tr>
		            <th>SL.</th>
					<th>Product Name</th>
                    <th>Headline</th>
                    <th>Rating</th>
                    <th>Comment</th>
					<th>Nickname</th>
                    <th>Location</th>
                    <th>Action</th>
                  
                    
                

			</tr>
		</thead>
		<tbody>
                        <?php
						
						$i = 1;
							
						
						$p_query=mysql_query("SELECT * FROM reviews WHERE product_id LIKE '%$product_id%'");	
						while($h_data=mysql_fetch_array($p_query))
						{	
							$product_id = $h_data['product_id'];
							$headline = $h_data['headline'];
							$comment = $h_data['comments'];
							$nickname = $h_data['nickname'];
							$location = $h_data['location'];
							
							// GETTING CATEGORY NAME
							
						$cat_sql=mysql_query("SELECT product_name FROM product WHERE product_id='$product_id' ");
						while($cat_data=mysql_fetch_array($cat_sql))
						{
							$product_name=$cat_data['product_name'];	
						}
						
						
					
						
					?>
                    	
			<tr class="odd gradeX">

				<td><?php echo $i;?></td>
                
				<td class="center">
				<?php echo $product_name; ?>
                </td>
                
                <td class="center">
				<?php echo $h_data['headline']; ?>
                </td>
                
                <td class="center">
				<?php echo $h_data['rating']; ?>
                </td>
                
                 <td class="center">
				<?php echo $h_data['comments']; ?>
                </td>
                
                
				<td class="center">
					   <?php echo $h_data['nickname']; ?>
                </td>
                
                <td class="center">
					   <?php echo $h_data['location']; ?>
                </td>
               
				
                
                 <td class="center" style="width:150px;">
                 
                  <a href="edit_reviews.php?product_id=<?php echo $product_id; ?>"  >Edit</a> |
                  <a href="remove_reviews.php?product_id=<?php echo $product_id; ?>"  onClick="return confarmation()">Remove</a>
                
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