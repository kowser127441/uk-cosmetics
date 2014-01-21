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
function validateForm1()
{
	
	//namel velidation -
	 var n=document.forms["myForm"]["category"].value;
	// alert("Cetagory Name field can't be empty");
	 
  if (n==0)
  {
  alert("Please Choose a Category");
  return false;
  }
  
  
  //Description velidation -
	 var n=document.forms["myForm"]["sub_name"].value;
  if (n==null || n=="")
  {
  alert("Sub-Category Name field can't be empty");
  return false;
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
<h2>Add New Sub-Category</h2>

</center>

 <?php
			include("add_sidebutton.php");
	?>
    
    
     <div style="width:500px; margin-left:auto; margin-right:auto;">
    
   <center> <?php 
   if(isset($_SESSION['error']))
   
   {
	   
	   if($_SESSION['error']==1){
	   
	   echo "Not Successfully Inserted";
	   }
	   
	   elseif($_SESSION['error']==2) {
		   
		   echo "Successfully Inserted";
		   }
	   
	   } 
	   unset($_SESSION['error']);
	   
	   ?>
     </center>
    
    
    
    <br/><br/><br/>
    <form method="post" action="adding_sub_category.php" enctype="multipart/form-data" style="margin-left:20px"  name="myForm" onsubmit="return validateForm1()">
    
    
    <table width="450" border="0">
 
         
         <tr>
        <td>Category Name :</td>
        <td>
        
        	<select name="category">
            	<option value="0">--- Choose Category ---</option>
                
                <?php
				include('../connection.php');
				$sql= mysql_query("SELECT * FROM category");
				
				while($data=mysql_fetch_array($sql))
				{
					$value=$data['category_id'];
					$category_name=$data['category_name'];
				
				?>
                
                <option value="<?php echo $value;?>"><?php  echo $category_name; ?></option>
                
                
                <?php
				}
				?>
            
            </select>
        
        </td>
        </tr>
         <tr>
        <td>Sub category Name :</td>
        <td><input type="text" name="sub_name" /></td>
        </tr>
        
        <tr>
        <td>Image(250*90 px) :</td>
        <td><input type="file" name="uploaded"></td>
        </tr>
       
         <tr>
          <td></td>
            <td>
            <input type="submit" value="Add"  style="margin-left:100px; height:30px; width:80px; font-size:15px;">
            </td>
          </tr>
  
</table>

  
      </form>
    

	</div>
    

</div>

  </body>
</html>