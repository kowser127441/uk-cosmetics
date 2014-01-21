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
	
	   //product Name velidation -
	 var n=document.forms["myForm"]["product_name"].value;
  if (n==null || n=="")
  {
  alert("Product name field can't be empty");
  return false;
  }

  
  	// SUb-Category velidation -
	 var n=document.forms["myForm"]["sub_category_id"].value;
  if (n==0)
  {
  alert("Please Choose a Sub-Category");
  return false;
  }
  
	

  
    //Details velidation -
	 var n=document.forms["myForm"]["details"].value;
  if (n==null || n=="")
  {
  alert("Details field can't be empty");
  return false;
  }
  
    //Price velidation -
	 var n=document.forms["myForm"]["price"].value;
  if (n==null || n=="")
  {
  alert("Price field can't be empty");
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
		

function changecategory3()
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
							document.getElementById("bodyspan_3").innerHTML=xmlhttp.responseText;
						}
				}
			
			
			var product_id = document.getElementById("body_3").value;
			
			xmlhttp.open("GET","edit_product_form.php?product_id=" + product_id ,true);
			xmlhttp.send();	

		}		





</script>
 
 
 
 
 
 <!--TINY EDITOR-->

<script src="js/nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
    
	new nicEditor({iconsPath : 'images/nicEditorIcons.gif'}).panelInstance('area3');
	new nicEditor({iconsPath : 'images/nicEditorIcons.gif'}).panelInstance('area4');
	
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
   include("view_menu.php");
   ?>


</div>


<!--Contents-->

<div class="content">
<center>
<h2>Edit Product</h2>

</center>

 <?php
			include("view_sidebutton.php");
            include('../connection.php');
	?>
    
    
     <div style="width:800px; margin-left:auto; margin-right:auto;">
     
       <?php
     // Changing PIcture
     if(isset($_POST['change_picture']))
     {
		$product= $_POST['product_id']; 
		$category= $_POST['category_id']; 
		$sub_category= $_POST['sub_category_id']; 
		
		// Creating New Folder If not Exist
		$folder = $category."/".$sub_category."/".$product;
		
		$structure = "PICTURE/".$folder;
		
		//echo $structure;
		//mkdir($structure,0777, true);
		

		if (!is_dir('$structure')) 
		{
			mkdir($structure,0777, true);
			
			
			// Uploading Picture
			
			
			
			 $target = $structure."/"; 
			 $target = $target . basename( $_FILES['uploaded']['name']) ; 
			 $ok=1; 
			 if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
			 {
				//echo "The file ". basename( $_FILES['uploaded']['name']). " has been uploaded";
				 
				 $query="UPDATE  product SET picture_url='$target' WHERE product_id='$product'";
				 if(!mysql_query($query))
				 {
					$_SESSION['error']=1 ; 
				 }
				 else
				 {
				 
					$_SESSION['error']= 2;

				 }
			 } 
			 else
			  {
				  $_SESSION['error']= 1;
			 	//	echo "Sorry, there was a problem uploading your file.";
			 }
			
			
			
		}
		
		else {
			
			}
		 
		 
	 }
     
     
     ?>
    
    
    
    
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
   
    <?php 

$product_id = $_REQUEST['product_id'];

include('../connection.php');

$query = mysql_query("SELECT * FROM product WHERE product_id='$product_id'");
while($data=mysql_fetch_array($query))
{

$product_name= $data['product_name'];
$category_id= $data['category_id'];
$sub_category_id= $data['sub_category_id'];
$product_code= $data['product_code'];
$terms=$data['terms'];
$purchase_price_1=$data['purchase_price_1'];
$sale_price=$data['sale_price'];
$details= $data['details'];

$size= $data['size'];
$color= $data['color'];
$buy_point=$data['buy_point'];
$sell_point=$data['earn_point'];
	

	
}


?>


<div style=" width:600px;">


<table>
<tr>
<td>

<center><h3>Edit Form</h3></center>

<form action="editing_product.php" method="post" name="myForm" onsubmit="return validateForm()">

<input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />

    <table width="500" border="0">
 
         
         <tr>
        <td>Product Name : </td>
        <td>
       	<input type="text" name="product_name" value="<?php echo $product_name; ?>"  />
        </td>
        </tr>
        
        
         <tr>
        <td>Product Code : </td>
        <td>
           <input type="text" name="product_code" value="<?php echo $product_code; ?>"  />
        </td>
        </tr>
        
        <tr>
        <td>Sub Category : </td>
        <td> 
       
         <select name="sub_category_id">
        
        
        <?php 
		
		$sub_sql=mysql_query("SELECT * FROM sub_category WHERE category_id='$category_id'");
		while($sub_data=mysql_fetch_array($sub_sql))
		{
		
		$new_sub_id = $sub_data['sub_category_id'];
		$new_sub_name = $sub_data['sub_category_name'];
		
		?>
        
        <option value="<?php echo $new_sub_id; ?>" <?php if($sub_category_id==$new_sub_id){ echo 'selected="selected" ' ; } ?> ><?php echo $new_sub_name; ?></option>
        
        <?php
		}
		?>
        
        
        </select>
        
        
        
        </td>
        </tr>
        
         <tr>
        <td>Details : </td>
        <td> <textarea name="details" id="area3" style="width:500px; height:200px;" ><?php echo $details; ?> </textarea> </td>
        </tr>
        
        <tr>
        <td>Terms : </td>
        <td> <textarea name="terms" id="area4" style="width:500px; height:200px;" ><?php echo $terms; ?> </textarea> </td>
        </tr>
         
         <tr>
        <td>Purchase Price : </td>
        <td> <input type="text" name="purchase_price_1" value="<?php echo $purchase_price_1; ?>"  /></td>
        </tr>
          <tr>
        <td>Sale Price : </td>
        <td> <input type="text" name="sale_price" value="<?php echo $sale_price; ?>"  /></td>
        </tr>
          <tr>
        <td>Buy Point : </td>
        <td> <input type="text" name="buy_point" value="<?php echo $buy_point; ?>"  /></td>
        </tr>
          <tr>
        <td>Sale Point : </td>
        <td> <input type="text" name="sell_point" value="<?php echo $sell_point; ?>"  /></td>
        </tr>
        
          <tr>
        <td>Size : </td>
        <td> <input type="text" name="size" value="<?php echo $size; ?>"  /></td>
        </tr>
        
          <tr>
        <td>Color : </td>
        <td> <input type="text" name="color" value="<?php echo $color; ?>"  /></td>
        </tr>
        
       <tr><td></td><td><input type="submit" value="Update" /></td>
       </tr>  
 
</table>

</form>


</td>
<td>
<center><h3>Change Picture</h3></center>

<form action="#" method="post" enctype="multipart/form-data">
<input type="hidden" name="product_id" value="<?php echo $product_id ?>">
<input type="hidden" name="category_id" value="<?php echo $category_id ?>">
<input type="hidden" name="sub_category_id" value="<?php echo $sub_category_id ?>">

<label>Choose New Picture </label>

<input type="file" name="uploaded"><br/>
<input type="submit" value="Change" name="change_picture">


</form>

</td>
</tr>
</table>






</div>
<br/><br/>

<span id="bodyspan_3"> </span> 

  </div>
    

</div>

  </body>
</html>