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
<h2>EDIT Brand</h2>

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
	$brand_id = $_REQUEST['brand_id'];
	
	$sql = mysql_query("SELECT * FROM brand WHERE brand_id='$brand_id'");
	while($data = mysql_fetch_array($sql))
	{
		$brand_name=$data['brand_name']; 
	}
	
	
	
	
	?>
    
    
    <br/><br/><br/>
    <form method="post" action="editing_brand.php" style="margin-left:20px"  name="myForm" onsubmit="return validateForm1()">
    <input type="hidden" name="brand_id" value="<?php echo $brand_id; ?>" />
    
    
    <table width="450" border="0">
 
         
         
         <tr>
        <td>Brand Name :</td>
        <td><input type="text" name="brand_name" value="<?php echo $brand_name; ?>" /></td>
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