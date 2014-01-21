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
	
// Session Time out


$inactive =600; // Set timeout period in seconds

if (isset($_SESSION['timeout'])) {
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $inactive) {
        session_destroy();
        header("Location: logout.php");
		die();
		echo "session time out";
    }
}
$_SESSION['timeout'] = time();
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

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    
   <script type="text/javascript">
function validateForm()
{
	
	//Old password velidation -
	 var n=document.forms["myForm"]["old_password"].value;
  if (n==null || n=="")
  {
  alert("Old Password field can't be empty");
  return false;
  }
  
  //New velidation -
	 var n=document.forms["myForm"]["new_password"].value;
  if (n==null || n=="")
  {
  alert("New Password 'field can't be empty");
  return false;
  }
	
	//Re type velidation -
	 var i=document.forms["myForm"]["re_password"].value;
  if (i==null || i=="")
  {
  alert("Re-Type Password field can't be empty");
  return false;
  }
  
  // both checking
  
   var i=document.forms["myForm"]["re_password"].value;
   var j=document.forms["myForm"]["new_password"].value;
  if (i != j)
  {
  alert("New Password and Re-Type Password Did Not Match !!");
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
<ul class="navigation">
    <li style=" margin-left:70px;"><a href="admin.php">&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
    <li><a href="add.php">&nbsp;&nbsp;Add&nbsp;&nbsp;&nbsp;</a></li>
   
    <li ><a href="view.php">&nbsp;&nbsp;View / Edit&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
     <li><a href="change_password.php" class="checked">&nbsp;&nbsp;Change Password&nbsp;&nbsp;&nbsp;</a></li>
    <li><a href="logout.php">&nbsp;&nbsp;Logout&nbsp;&nbsp;&nbsp;</a></li>
    
</ul>
</div>


<!--Contents-->

<div class="content">
<center>
<h2> Change Password </h2>

 <?php 
 
   if(isset($_SESSION['error']))
   
   {
	   
	   if($_SESSION['error']==1){
	   
	   echo "Old Password did not match !!";
	   }
	   
	   elseif($_SESSION['error']==2) {
		   
		   echo " Password Successfully Changed";
		   }
	   
	   } 
	   unset($_SESSION['error']);
	   
	   ?>




</center>

 <div style="width:500px; margin-left:auto; margin-right:auto;">
    
   
    <br/><br/><br/>
    <form method="post" action="changing_password.php"   name="myForm" onsubmit="return validateForm()">
    
    <input type="hidden" name="admin_id" value="<?php echo $_SESSION['admin_access'];?>">
    
    
    <table width="380" border="0">
 
         
         <tr>
        <td>Old Password :</td>
        <td><input type="password" name="old_password" /></td>
        </tr>
        <tr>
        <td>New Password :</td>
        <td><input type="password" name="new_password" /></td>
        </tr>
        <tr>
        <td>Re-type Password :</td>
        <td><input type="password" name="re_password" /></td>
        </tr>
        <tr>
       
 
         <tr>
          <td></td>
            <td>
            <input type="submit" value="Change"  style="margin-left:100px; height:30px; width:80px; font-size:15px;">
            </td>
          </tr>
  
</table>

  
      </form>
    

	</div>





</div>

  </body>
</html>