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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="css/super_admin.css" />
     <link href="css/bootstrap.css" rel="stylesheet">
    
   <script language="javascript">



function add_advertaisement()
		{
			
			
			  var xmlhttp=false;
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
							document.getElementById("bodyspan1").innerHTML=xmlhttp.responseText;
						}
				}
			var add_type = document.getElementById("body1").value;
			xmlhttp.open("GET","sub_add_advertaisement.php?add_type=" + add_type,true);
			xmlhttp.send();	

		}



function get_advertaisement()
		{
			
			
			  var xmlhttp=false;
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
			xmlhttp.open("GET","add_advertaisement_sub.php?bodySelect=" + bodySelect,true);
			xmlhttp.send();	

		}



function get_advertaisement2()
		{
			
			var category_id = document.getElementById();
			
			  var xmlhttp=false;
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
			var bodySelect = document.getElementById("body2").value;
			xmlhttp.open("GET","add_advertaisement_sub.php?bodySelect=" + bodySelect,true);
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

  



<!-- Form Velidation--> 
    
 <script type="text/javascript">
function validateForm()
{
	

	// Category velidation -
	 var n=document.forms["myForm"]["add_type"].value;
  if (n==0)
  {
  alert("Please Choose a Advertaisement type");
  return false;
  }
  
	
	// Position velidation -
	 var n=document.forms["myForm"]["position"].value;
  if (n==null || n=="")
  {
  alert("Position field can't be empty");
  return false;
  }
 	
 	
 //Image velidation -
 var n=document.forms["myForm"]["uploaded"].value;
  if (n==null || n=="")
  {
  alert("Please chose an Image ");
  return false;
  }
  
  
   //url velidation -
 var n=document.forms["myForm"]["url"].value;
  if (n==null || n=="")
  {
  alert("URL field can't be empty");
  return false;
  } 	
 	
 	
	 
 
   //Code velidation -
	 var n=document.forms["myForm"]["code"].value;
  if (n==null || n=="")
  {
  alert("Code field can't be empty");
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
<h2>Add Advertaisement</h2>

</center>

 <?php
			include("add_sidebutton.php");
	?>
    
    
     <div style="width:800px; margin-left:auto; margin-right:auto;">
    
   <center> <?php 
   if(isset($_SESSION['error']))
   
   {
	   
	   if($_SESSION['error']==1){
	   
	   echo "Not Successfully Updated .<br/> Reason : Position already Exists !";
	   }
	   
	   elseif($_SESSION['error']==2) {
		   
		   echo "Successfully Updated";
		   }
	   
	   } 
	   unset($_SESSION['error']);
	   
	   ?>
     </center>
   <br/><br/>
   <div style="position:absolute;">
   
   <!--Add Advertaisement-->
   
    <form method="post"  enctype="multipart/form-data" action="adding_add.php" style="margin-left:20px"  name="myForm" onsubmit="return validateForm()">
    <table width="700" border="0">



      
  <tr>
  
   
    <td> <p>Choose Add type : </p> </td>
    
   
    <td>
    			
                    
    				<select name="add_type"  onchange="add_advertaisement()" id="body1">
					
                    <option value="0">--- Choose Add type ---</option>
                    <option value="1">Image</option>
                    <option value="2">Code</option>
                    <option value="3">Flash</option>
                     
                    </select>
    
    </td>
    
    
    
    </tr>
    
    
    <tr>
    
    <td>  Position : </td>
    
    <td><input type="text" name="position" style="width:100px;"> </td>
    </tr>
    
    <tr>
    
    <td>Choose Option : </td>
    
    <td>
     <span id="bodyspan1">
		
	 </span>
    </td>
  </tr>
  
  <tr> 
<td colspan="2" ><span style="color:red;">Advertaisement Width should be 220*280 </span></td
></tr>  
 
</table>

</form>

   
 <!--End of add Advertaisement-->
   
<br/><br/> 
 
 
<h3>Remove Advertaisement : </h3> 
 
   
   <!--Show Advertaisement-->
 


<table class="data display datatable" id="example" style="width:900px;">
		<thead>
			<tr>
		            <th>Position</th>
					<th>Picture</th>
					<th>Code</th>
                    <th>Flash</th>
                    <th>Width</th>
                    <th>Height</th>
                    <th>Change Position</th>
                    <th>Change URL</th>
                    <th>Action</th>
                    
                    
                

			</tr>
		</thead>
		<tbody>
                                        <?php
										
					include('../connection.php');										
										
					
					$i=1;
					$sql=mysql_query("SELECT * FROM advertaisement ORDER BY position");
					
						while($data=mysql_fetch_array($sql)){
							
							$position = $data['position'];
							$pic_url = $data['pic_url'];
							$code = $data['code'];
							$flash = $data['flash'];
							$width =240;
							$height = $data['height'];
							$url = $data['url'];
							
						
					?>
                    	
			<tr class="odd gradeX">

				<td><?php echo $position;?></td>
				
				<td class="center">
                
                <?php
                if($pic_url != 'null')
				{
                ?>
                <img src="<?php echo $pic_url; ?>" style="width:150px;">
                <?php
				}
				else
				{
				
					echo $pic_url;
				}
				?>
                </td>
				
                <td class="center">
               <?php echo stripslashes($code) ; ?>
                </td>
                
                <td class="center">
               <?php 
			   
			   if($flash != 'null')
			   {
				
				?>
				 
                  <object width="100" height="150">
    <param name="SRC" value="<?php echo $flash; ?>">
    <embed src="<?php echo $flash; ?>" width="100" height="150"></embed>
    </object>
    
    <?php
                   
			   }
			   else
			   {
			   
			   echo $flash;
			   
			   }
			    ?>
                </td>
                
               <td class="center">
               <?php echo $width; ?>
                </td>
                
                <td class="center">
               <?php echo $height; ?>
                </td>
                
                <td>
                
                	<form action="change_add_position.php" method="post">
                	<input type="hidden" value="<?php echo $position; ?>" name="old_position" >
                	<input type="text" name="new_position" value="<?php echo $position; ?>" style="width:50px;" >
                	<input type="submit" value="Change" >
                	</form>
                
                </td>
                
                <td>
                <?php
                if($pic_url != 'null')
                {
                ?>
                
                
                	<form action="change_add_url.php" method="post">
                	<input type="hidden" value="<?php echo $position; ?>" name="position" >
                	<input type="text" name="url" value="<?php echo $url; ?>" style="width:150px;" >
                	<input type="submit" value="Change" >
                	</form>
                
                </td>
                
                
                <?php
                }
                ?>
                
                <td class="center">
               
			   <a href="remove_add.php?position=<?php echo $position; ?>"  onClick="return confarmation()" > Remove </a>
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