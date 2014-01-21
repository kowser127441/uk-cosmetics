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
		
		document.getElementById("add").style.visibility = "visible"; 
			
		}		


</script>


 
 
 <!--TINY EDITOR-->

<script src="js/nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
	
	new nicEditor({iconsPath : 'images/nicEditorIcons.gif'}).panelInstance('area3');
	
});
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
    <form method="post" action="adding_new_type.php" enctype="multipart/form-data" style="margin-left:20px"  name="myForm" onsubmit="return validateForm1()">
    
    
    <table width="450" border="0">
    
 
         
         <tr>
        <td>Category Name :</td>
        <td>
        
        	<select name="category" id="body"  onchange="changecategory()">
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
        <td><span id="bodyspan">
        <select name="sub_category" id="body" >
            	<option value="0">--- Choose Sub Category ---</option>
                
                <?php
				include('../connection.php');
				$sql= mysql_query("SELECT * FROM sub_category");
				
				while($data=mysql_fetch_array($sql))
				{
					$value=$data['sub_category_id'];
					$category_name=$data['sub_category_name'];
				
				?>
                
                <option value="<?php echo $value;?>"><?php  echo $sub_category_name; ?></option>
                
                
                <?php
				}
				?>
            
            </select> 
        </span></td>
        </tr>
        
        <tr>
        <td>Type :</td>
         <td><input type="text" name="type_name" /></td>
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