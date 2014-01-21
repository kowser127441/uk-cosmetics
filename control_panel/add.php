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
    
   
 <script language="javascript">

function changecategory()
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
			var bodySelect = document.getElementById("body").value;
			xmlhttp.open("GET","sub_news.php?bodySelect=" + bodySelect+"category_id="+category_id,true);
			xmlhttp.send();	

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
<h1> This is Add Area</h1>

</center>

 <?php
			include("add_sidebutton.php");
	?>
    
  




</div>

  </body>
</html>