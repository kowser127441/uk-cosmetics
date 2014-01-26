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
  
  	// brand name velidation -
	 var n=document.forms["myForm"]["brand"].value;
  if (n==0)
  {
  alert("Please Choose a BrandName");
  return false;
  }
  
	
	// Product velidation -
 var n=document.forms["myForm"]["product_id"].value;
  if (n==0)
  {
  alert("Please Choose a Product");
  return false;
  }
  
    //Discount velidation -
	 var n=document.forms["myForm"]["discount"].value;
  if (n==null || n=="")
  {
  alert("Discount field can't be empty");
  return false;
  }
  
      //Duration velidation -
	 var n=document.forms["myForm"]["duration"].value;
  if (n==null || n=="")
  {
  alert("Duration Day field can't be empty");
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
			
			
			xmlhttp.open("GET","original_price.php?product_id=" + product_id ,true);
			xmlhttp.send();	

		}




</script>
 <script>
    function source()
	{
		var position = document.getElementById("position").value;
		
        hide_all();
        
        if(position==1){
        var name = product1 ;    
        }
        else if(position==2){
           var name = brand1 ;
        }
        else if(position==3)
            {
                var name = sub_category1
            }
        else 
            {
                var name = category1;
            }
       // alert(name);
        
        name.style.display = 'block' ;
                
              
		
	}
        
        function hide_all(){
            
            product1.style.display = 'none' ;
            brand1.style.display = 'none' ;
            sub_category1.style.display = 'none' ;
            category1.style.display = 'none' ;
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
<h2>Add Discount</h2>

</center>

 <?php
			include("add_sidebutton.php");
	?>
    
    
     <div style="width:1000px; margin-left:auto; margin-right:auto;">
    
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
    
<!--  <center>Add Discount Product Wise</center>-->
    
         <table  style="width: 200px; height: 30px; margin-left: 100px">
             <tr>
                 <td>
                     SELECT OPTION:
                   
     <select id="position"  onChange="source()" >
     <option value="0">---Select Option----</option>
    <option value="1">Products</option>
     <option value="2">Brand</option>
               <option value="3">Sub-Category</option>
                    <option value="4">Category</option>
                         
     </select>
          
                     
                     
                     
                 </td>
             </tr>
 
             
         </table>
         <br/><br/><br/><br/>
         <table style="width: 800px;margin-top: 100px">
               <tr>
                   <td>
         
                       <form method="post" id="product1"  enctype="multipart/form-data" action="adding_discount.php" style="margin-left:20px ; display: none;"  name="myForm" onsubmit="return validateForm()">
 
                
                 <table width="400" border="0" style="margin-left: 100px; ">
       <tr>
           <td><p style="color: red">ADD DISCOUNT BY PRODUCT</p></td>
       </tr>
        
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
        <td><span id="bodyspan"> </span></td>
        </tr>
        
         <tr>
        <td>Choose Brand :</td>
        <td>
        
        <select  name="brand" id="brand" onchange="changecategory2()">
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
        <td>Original Price : </td>
        <td><span id="bodyspan_3"> </span></td>
        </tr>
        
        
         <tr>
        <td>Discount Amount : </td>
        <td><input type="text" name="discount" /></td>
        </tr>
        
        
         <tr>
        <td>Duration Day : </td>
        <td><input type="text" name="duration" /></td>
        </tr>
        
       
       
       
         <tr>
          <td></td>
            <td>
            <input type="submit" value="Add"  style="margin-left:100px; height:30px; width:80px; font-size:15px;">
            </td>
          </tr>
  
</table>

  
      </form>
                   </td>

         <td>
         
         
          <form method="post" id="brand1" enctype="multipart/form-data" action="adding_discount_brand.php" style="margin-left:20px; display: none;"  >
    
                
    <table width="400" border="0" style="margin-left: 100px" >
        <tr>
            <td>
                <p style="color:red">ADD DISCOUNT BY BRAND</p>
            </td>
        </tr>
  
        
         <tr>
        <td>Choose Brand :</td>
        <td>
        
        <select  name="brand_id" id="brand" onchange="changecategory2()">
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
        <td>Discount Amount : </td>
        <td><input type="text" name="discount" /></td>
        </tr>
        
        
         <tr>
        <td>Duration Day : </td>
        <td><input type="text" name="duration" /></td>
        </tr>
        
       
       
       
         <tr>
          <td></td>
            <td>
            <input type="submit" value="Add"  style="margin-left:100px; height:30px; width:80px; font-size:15px;">
            </td>
          </tr>
  
</table>

  
      </form>
         </td>
         <td>
         
          <form method="post" id="sub_category1" enctype="multipart/form-data" action="adding_discount_sub_category.php" style="margin-left:20px; display: none;" >
    
                
    <table width="400" border="0" style="margin-left: 100px" >
        <tr>
            <td>
                <p style="color:red">ADD DISCOUNT BY SUB_CATEGORY</p>
            </td>
        </tr>
        
      
        
         <tr>
        <td>Choose Sub Category :</td>
        <td>
        
        <select  name="sub_category_id" id="sub_category_id" onchange="changecategory2()">
					<option value="0">---Select Sub Category---</option>
							 <?php
							 
							 include '../connection.php';
							 
					  $sql=mysql_query("select * from sub_category ");
					  $row=mysql_num_rows($sql);
					  if($row>0){
						  while($row=mysql_fetch_array($sql)){
					 ?>
		         	  <option value="<?php echo $row['sub_category_id'];?>"><?php echo $row['sub_category_name'];?></option>
		         	<?php
						  }
					  }
			?>
				 </select>
        
        </td>
        </tr>
        
         <tr>
        <td>Discount Amount : </td>
        <td><input type="text" name="discount" /></td>
        </tr>
        
        
         <tr>
        <td>Duration Day : </td>
        <td><input type="text" name="duration" /></td>
        </tr>
        
       
       
       
         <tr>
          <td></td>
            <td>
            <input type="submit" value="Add"  style="margin-left:100px; height:30px; width:80px; font-size:15px;">
            </td>
          </tr>
  
</table>

  
      </form>
         </td>
         
          <td>
         
         
          <form method="post" id="category1" enctype="multipart/form-data"  action="adding_discount_category.php" style="margin-left:20px; display: none;">
    
                
    <table width="400" border="0" style="margin-left: 100px" >
        <tr>
            <td>
                <p style="color:red">ADD DISCOUNT BY CATEGORY</p>
            </td>
        </tr>
        
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
        <td>Discount Amount : </td>
        <td><input type="text" name="discount" /></td>
        </tr>
        
        
         <tr>
        <td>Duration Day : </td>
        <td><input type="text" name="duration" /></td>
        </tr>
        
       
       
       
         <tr>
          <td></td>
            <td>
            <input type="submit" value="Add"  style="margin-left:100px; height:30px; width:80px; font-size:15px;">
            </td>
          </tr>
  
</table>

  
      </form>
         </td>
         
               </tr>
         </table>

         
         

	</div>
    

</div>

  </body>
</html>