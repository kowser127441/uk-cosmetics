<?php
session_start();

if (isset($_SESSION['admin_access'])) 
{
}
else
{
	header("Location:logout.php");
	}
	
// Session Time out


$inactive =600; // Set timeout period in seconds

if (isset($_SESSION['timeout'])) {
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $inactive) {
        session_destroy();
        header("Location: logout.php");
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
    
   
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->

  </head>

  <body>

   <div class="header">
<img src="images/logo.png"  class="logo"/>



</div>

<div class="divider">

</div>
<!--Main Menu-->

<div class="menu">

<ul class="navigation">
    <li style=" margin-left:70px;"><a href="admin.php">&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
    <li><a href="add.php">&nbsp;&nbsp;Add&nbsp;&nbsp;&nbsp;</a></li>
   	<!--<li ><a href="edit.php">&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;&nbsp;</a></li>-->
    <li ><a href="view.php">&nbsp;&nbsp;View / Edit&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
    <li ><a href="orders.php">&nbsp;&nbsp;Orders&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
    <li><a href="change_password.php">&nbsp;&nbsp;Change Password&nbsp;&nbsp;&nbsp;</a></li>
    <li><a href="logout.php">&nbsp;&nbsp;Logout&nbsp;&nbsp;&nbsp;</a></li>
    
</ul>
</div>


<!--Contents-->

<div class="content">
<center>
<h1> You Have Logged In As Admin </h1>
<h3>Choose from the Navigation Bar what you want to do and Just Click.</h3>
</center>

</div>

  </body>
</html>