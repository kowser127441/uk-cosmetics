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
<html lang="en"><head>
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
 <script>
    function iframe_source()
	{
		var position = document.getElementById("position").value;
		var editior = document.getElementById("editior");
		editior.src = "editor/samples/dany.php?position="+position ; 
		if(position !='0')
		{
		editior.style.visibility = 'visible';
		}
		else{
			editior.style.visibility = 'hidden';
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
<h2>Add Random Datails</h2>

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
     SELECT POSITION:
     <select id="position" onChange="iframe_source()">
     <option value="0">---Select Position----</option>
     <option value="1">1</option>
          <option value="2">2</option>
               <option value="3">3</option>
                    <option value="4">4</option>
                         <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
     </select>
     
     
   
<!--START TEXT EDITOR-->

<iframe  id="editior" width="850px" height="850px" src="editor/samples/dany.php" style="visibility:hidden"></iframe>

<!--END OF TEXT EDITOR-->
      

      
    

	</div>
    

</div>

  </body>
</html>