<?php
error_reporting(0);
session_start();

?>



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
   


<SCRIPT language=JavaScript>
<!-- http://www.spacegun.co.uk -->
	var message = "function disabled"; 
	function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ 	alert(message); return false; } 
	if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { 	alert(message); 	return false; } } 
	document.onmousedown = rtclickcheck;
	
</SCRIPT>



  <!-- Form Velidation--> 
    
 <script type="text/javascript">
function validateForm()
{
	
	// Passowrd velidation -
	 var n=document.forms["myForm"]["password"].value;
  if (n==0 || n=='')
  {
  alert("password field can't be empty");
  return false;
  }
  
  	// Re-Passowrd velidation -
	 var n=document.forms["myForm"]["re_password"].value;
  if (n==0 || n=='')
  {
  alert("Re-Type password field can't be empty");
  return false;
  }
  
  	// both velidation -
	var m=document.forms["myForm"]["password"].value;
	 var n=document.forms["myForm"]["re_password"].value;
  if (m != n)
  {
  alert("Password and Re-Type Password did not match !!");
  return false;
  }
  
  
}
</script>


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


<?php

$email= mysql_escape_string($_REQUEST['email']);
$token= mysql_escape_string($_REQUEST['token']);

?>

		
      <form name="myForm" class="form-signin" action="changing_password_forgote.php" method="post" onSubmit="return validateForm()">
      <input type="hidden" name="email" value="<?php echo $email; ?>"> 
      <input type="hidden" name="token" value="<?php echo $token; ?>">
        <h4 class="form-signin-heading">Enter Your New Password :  </h4>
        <input type="password" name="password" class="input-block-level" placeholder="New Password">
        <h4 class="form-signin-heading">Re-Type Password :  </h4>
        <input type="password" name="re_password" class="input-block-level" placeholder="Re-Type Passwor">
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





