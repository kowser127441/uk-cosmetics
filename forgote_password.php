email

<?php
error_reporting(0);
session_start();

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Forgot Password ?</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
<!--
    <link rel="shortcut icon" href="images/faviconi.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
-->


<SCRIPT language=JavaScript>
<!-- http://www.spacegun.co.uk -->
	var message = "function disabled"; 
	function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ 	alert(message); return false; } 
	if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { 	alert(message); 	return false; } } 
	document.onmousedown = rtclickcheck;
	
</SCRIPT>



  </head>

  <body>

    <div class="container">
    
    
<?php

if(isset($_SESSION['error']))

{
	if($_SESSION['error']==1)
	{

?>    

<center>
<h4 style="color:#F00">Some Problem Occured !!</h4>
</center>

<?php
	}
	
	unset($_SESSION['error']);
}
?>


		
      <form class="form-signin" action="email_url.php" method="post">
        <h2 class="form-signin-heading">Enter You Email Address </h2>
        <input type="text" name="email" class="input-block-level" placeholder="Email Address">
        <button class="btn btn-large btn-primary" type="submit">OK</button>
      </form>
      
      
      
      

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    

  </body>
  
  <?php  
  function  display_code_php()     
   {     
     if (isset ($_GET ['source']))     
       {     
         echo '<a <p> href="',$_SERVER['PHP_SELF'],'"> Back </ a> </ p>';     
         echo '<p> This is the code php file: </ p>';     
         $page = highlight_file ($_SERVER [ 'SCRIPT_FILENAME'], TRUE);     
         $page = str_replace (     
           array ( '<code>', '/ code>', '','</ are >','< font color ="'),     
           array ( '<pre style="padding:1em;border:2px solid black;overflow:scroll">', '/ pre>', '','</ span >','< span style = "color:' ), $page);     
         echo $page;     
         echo '<a <p> href="',$_SERVER['PHP_SELF'],'"> Back </ a> </ p>';     
         echo '</ body> </ html>';     
         exit;     
	   }
	       
   }
    display_code_php(); 
  ?>  
  
  
  
</html>




