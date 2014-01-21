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
	
	// image_id velidation -
	 var n=document.forms["myForm"]["image_id"].value;
  if (n==0 || n=='')
  {
  alert("Please Choose a image_id");
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
<h2>Upload Image</h2>

</center>

 <?php
			include("add_sidebutton.php");
	?>
    
    
     <div style="width:800px; margin-left:auto; margin-right:auto;">
    
   <center> <?php 
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
    
 
    
    <br/><br/><br/>
    <form method="post" enctype="multipart/form-data"  action="uploading_image.php" style="margin-left:20px"  name="myForm" onsubmit="return validateForm()">
    
    
    <table width="500" border="0">
 
        
        
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


    <h3>Current Image : </h3>
    
    

<table class="data display datatable" id="example" style="width:800px;">
		<thead>
			<tr>
		           
					<th>Picture</th>
                    
                    <th>Action</th>
                    
                

			</tr>
		</thead>
		<tbody>
                        <?php
						include('../connection.php');
						
						
						$p_query=mysql_query("SELECT * FROM image");	
						while($h_data=mysql_fetch_array($p_query))
						{	
							$image_id = $h_data['image_id'];
							$pic_url = $h_data['pic_url'];
							
							
						
					?>
                    	
			<tr class="odd gradeX">

				
                
				
              
                <td class="center">
					 <img src="<?php echo $pic_url; ?>" style="width:150px;" >
                    
                </td>
                 
				
                
                 <td class="center">
                 

                <a href="remove_image.php?image_id=<?php echo $image_id;?> & pic_url=<?php echo $pic_url;?>"  onClick="return confarmation()">Remove</a><br/> 
              
              
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