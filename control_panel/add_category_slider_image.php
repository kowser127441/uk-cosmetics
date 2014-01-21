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
	
	// position velidation -
	 var n=document.forms["myForm"]["position"].value;
  if (n==0 || n=='')
  {
  alert("Please Choose a Position");
  return false;
  }
  
 
 
  
 //Image velidation -
	 var n=document.forms["myForm"]["uploaded"].value;
  if (n==null || n=="")
  {
  alert("Please chose an Image");
  return false;
  }  
  
  	
 
  
  
  
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
 
 
 
function confarmation2()
{
var r=confirm("Are you sure you want to Set This Book in Homepage ?");
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
			xmlhttp.open("GET","category_sliderimage_page.php?category_id=" + bodySelect,true);
			xmlhttp.send();	

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
<h2>Add Category Slider Image</h2>

</center>

 <?php
			include("add_sidebutton.php");
	?>
    
    
     <div style="width:800px; margin-left:auto; margin-right:auto;">
    
   <center> 
   
   <?php 
   if(isset($_SESSION['error']))
   
   {
	   
	   if($_SESSION['error']==1){
	   
	   echo "Not Successfully Updated";
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
 

 
 ?>   
    
    <br/><br/><br/>
    <form method="post" enctype="multipart/form-data"  action="adding_category_slider_image.php" style="margin-left:20px"  name="myForm" onsubmit="return validateForm()">
    
    
    <table width="500" border="0">
       
       <tr>
        <td>Choose Category :</td>
        <td>
        
        <select  name="category_id" id="body" onchange="changecategory()" >
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
        <td>Select Position : </td>
        <td><span id="bodyspan"> </span></td>
        </tr>
        
        <tr>
        <td>Choose Image</td>
        <td><input type="file" name="uploaded">
        <br/>
        <span style="color:#F00">Image Resulation - 278*728 px </span>
        </td>
        </tr>
        
        
        
 <tr>
 <td></td>
 <td><input type="submit" value="Sumbit"></td>
 </tr>      
  
</table>

  
      </form>


    <h3>Current Books : </h3>
    
    

<table class="data display datatable" id="example" style="width:800px;">
		<thead>
			<tr>
                    <th>Category</th>
		            <th>Position</th>
					<th>Picture</th>
                    <th>Action</th>
                    
                

			</tr>
		</thead>
		<tbody>
                        <?php
						
						$i=1;
						
						$p_query=mysql_query("SELECT * FROM category_slider_image ");	
						while($h_data=mysql_fetch_array($p_query))
						{	
						
						    
							$position = $h_data['position'];
							$pic_url = $h_data['pic_url'];
							$category_id = $h_data['category_id'];
						
							
						//categoryname	
						
							$cat_sql=mysql_query("SELECT category_name FROM category WHERE category_id='$category_id'");
						while($cat_data=mysql_fetch_array($cat_sql))
						{
							$category_name=$cat_data['category_name'];	
						}
							
						
					?>
                    	
                        
			<tr class="odd gradeX">
            
                	<td><?php echo $category_name;?></td>
                
				<td><?php echo $position;?></td>
                
				
              
                <td class="center">
					 <img src="<?php echo $pic_url; ?>" style="width:150px;" >
                    
                </td>
				
                
                 <td class="center">
                 

                <a href="remove_category_slider_image.php?position=<?php echo $position;?> & pic_url=<?php echo $pic_url;?>  & category_id=<?php echo $category_id?>"  onClick="return confarmation()">Remove</a><br/> 
              
              
                </td>
                
				
		     </tr>
			
           <?php

						
						}
					
					 ?>
                        
		</tbody>
				</table>
      

      
    

	</div>
    

</div>

  </body>
</html>