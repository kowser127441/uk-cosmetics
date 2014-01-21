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
	 var n=document.forms["myForm"]["brand"].value;
	// alert("Cetagory Name field can't be empty");
	 
  if (n==0)
  {
  alert("Please Choose a brand");
  return false;
  }
  
  
  //Description velidation -
	 var n=document.forms["myForm"]["brand_name"].value;
  if (n==null || n=="")
  {
  alert("Brand_Name field can't be empty");
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
<h2>EDIT Sub Category</h2>

</center>

 <?php
			include("view_sidebutton.php");
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
    
    <?php
    include("../connection.php");
	$sub_category_id = $_REQUEST['sub_category_id'];
	
	$sql = mysql_query("SELECT * FROM sub_category WHERE sub_category_id='$sub_category_id'");
	while($data = mysql_fetch_array($sql))
	{
		$sub_category_name=$data['sub_category_name']; 
		$picture = $data['pic_url'];
	}
	
	
	
	
	?>
    
    
    <br/><br/><br/>
    <form method="post" action="editing_sub_category.php" style="margin-left:20px"  name="myForm" onsubmit="return validateForm1()">
    <input type="hidden" name="sub_category_id" value="<?php echo $sub_category_id; ?>" />
    
    
    <table width="450" border="0">
 
         
         
         <tr>
        <td>Sub Category Name :</td>
        <td><input type="text" name="sub_category_name" value="<?php echo $sub_category_name; ?>" /></td>
        </tr>
        
         <tr>
          <td></td>
            <td>
            <input type="submit" value="Edit"  style="margin-left:100px; height:30px; width:80px; font-size:15px;">
            </td>
          </tr>
        </form>
        
         <form method="post" action="editing_sub_category_image.php" enctype="multipart/form-data" style="margin-left:20px"  name="myForm" onsubmit="return validateForm1()">
    <input type="hidden" name="sub_category_id" value="<?php echo $sub_category_id; ?>" />
         <tr>
        <td>Sub Category Image :</td>
        <td><img src="<?php echo '../control_panel/'.$data['pic_url']; ?>" style="width:150px;" ></td>
        </tr>
        <tr>
        <td>Image :</td>
        <td><input type="file" name="uploaded"></td>
        </tr>
       
         <tr>
          <td></td>
            <td>
            <input type="submit" value="Edit"  style="margin-left:100px; height:30px; width:80px; font-size:15px;">
            </td>
          </tr>
  
</table>

  
      </form>
    

	</div>
    

</div>

  </body>
</html>