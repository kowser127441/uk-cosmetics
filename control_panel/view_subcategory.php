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
<h2>View Sub Category</h2>

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
  //$sub_category_id=$_POST['sub_category'];
 //$brand_id=$_POST['brand'];
 
 
 
 ?>   
    
    <br/><br/><br/>
    
    
    
    <h3>Subcategory : </h3>
    
    

<table class="data display datatable" id="example" style="width:850px; magin-left:100px;">
		<thead>
			<tr>
		            <th>SL.</th>
					<th>Category Id</th>
                    <th>Category Name</th>
                    <th>Sub-Category Id</th>
                    <th>Sub-Category Name</th>
                    
                    <th>Picture</th>
                    <th>Action</th>
                    
                

			</tr>
		</thead>
		<tbody>
                        <?php
						
						include('../connection.php');
                                                
                                                function total($sub_cat){
                                                    $total_sql = mysql_query("SELECT product_id FROM product WHERE sub_category_id='$sub_cat'");
                                                    $count = mysql_num_rows($total_sql);
                                                    if($count > 0){
                                                        return TRUE ;
                                                    }
                                                    else{
                                                        return FALSE ;
                                                    }
                                                }
                                                
						
						//echo $category_id.'--'.$sub_category_id.'--'.$brand_id;
						
						$i = 1;
							
						
					$sql=mysql_query("SELECT * FROM sub_category");
					while($data = mysql_fetch_array($sql))
					{
						$sub_category_id = $data['sub_category_id'];
						$sub_category_name = $data['sub_category_name'];
						$picture = $data['pic_url'];
						$category_id = $data['category_id'];
						
						
					$name_sql = mysql_query("SELECT category_name FROM category WHERE category_id='$category_id'");
					while($data1= mysql_fetch_array($name_sql))
					{
						$category_name = $data1['category_name'];
					}
					
						
					?>
                    	
			<tr class="odd gradeX">

				<td><?php echo $i;?></td>
                <td class="center">
				<?php echo  $data['category_id']; ?>
                </td>
                
                 <td class="center">
				<?php echo  $category_name; ?>
                </td>
				
                
                <td class="center">
				<?php echo  $data['sub_category_id']; ?>
                </td>
                
                <td class="center">
				<?php echo $sub_category_name; ?>
                </td>
                
                
                <td class="center">
					 <img src="<?php echo '../control_panel/'.$data['pic_url']; ?>" style="width:150px;" >
                    
                </td>
				
                
                 <td class="center" style="width:150px;">
                 
                  <a href="edit_sub_category.php?sub_category_id=<?php echo $sub_category_id; ?>"  >Edit</a> |
                  
                  <?php
                  if(total($sub_category_id) == FALSE)
                  {
                  ?>
                  <a href="remove_sub_category.php?sub_category_id=<?php echo $sub_category_id; ?>"  onClick="return confarmation()">Remove</a>
                 
                  <?php
                  }
                  ?>
                          
                          
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