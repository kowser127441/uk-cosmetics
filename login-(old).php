

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title> Login at Superdrug </title>

<meta name="description" content="Hair products on superdrug.com including hair dye, shampoo, conditioner, styling and accessories. Buy great brands including John Frieda, Nice N Easy, Aussie, Tresemme, L’Oreal Elvive. View and add reviews to the great products you’re tried" />
    <meta name="keywords" content="Buy hair products online at superdrug.com, offers, reviews, savings, discounts, shampoo, conditioner, styling, hair dye and dye removal, hair care, accessories, salon hair care, John Frieda, Colour B4, L’Oreal, Tresemme, Aussie, Nice n easy, Garnier" />



<meta name="verify-v1" content="Cito5LmzgVUE4uNVGwWZt3DJvs0F0w2oNIHFtwDlwb4=">
<meta name="google-site-verification" content="5q-mCCAR4TLkljNuR6YUq3OCgmeKNdha8kuoWC1EtSE" />
<meta name="msvalidate.01" content="17C3D90CD4ED95BA913770CEC969388D" />
<meta name="viewport" content="980px">
<meta name="language" content="english">

<!-- added for IE Pinned Tile -->
<meta name="application-name" content="Superdrug.com"/>
<meta name="msapplication-TileColor" content="#ffffff"/>
<meta name="msapplication-TileImage" content="../images/superdrugtile.png"/>


<link rel="stylesheet" href="css/stylesv2.css" type="text/css" media="screen">
<!--[if IE 6]><link rel="stylesheet" href="http://www.superdrug.com/content/ebiz/superdrug/resources/css/ie6.css" type="text/css" media="screen"><![endif]-->
<!--[if lte IE 7]><link rel="stylesheet" href="http://www.superdrug.com/content/ebiz/superdrug/resources/css/ie7.css" type="text/css" media="screen"><![endif]-->
<!--[if IE 8.000]><link rel="stylesheet" href="http://www.superdrug.com/content/ebiz/superdrug/resources/css/ie8.css" type="text/css" media="screen"><![endif]-->
<link rel="stylesheet" href="css/container.css" type="text/css" media="screen"> 
<link rel="stylesheet" href="css/print.css" type="text/css" media="print"> 




<link rel="shortcut icon" type="image/x-icon" href="http://www.superdrug.com/content/ebiz/superdrug/resources/images/core/favicon.ico"> 

<link rel="stylesheet" href="css/header.css" type="text/css" media="screen">
<script type="text/javascript" src="js/full.js"></script>

<script src="js/a29fc34d976d7e5210f052343af2e81e.js?1376920210"></script>
</head>
<body id="baby" class="   baby  ">
<a href="#content" class="hide">Skip to content</a>
<!-- start wrapper -->
<div id="wrapper">
<!-- start header -->
<div id="header-2012-wrapper" class="clearfix">

<!-- start header -->

<?php include("header.php"); ?>



<!-- end header -->

<!-- start nav -->
<div id="mainNav-wrapper-2012">


<?php include("menu.php"); ?>

<!-- venda_category rec=icat,ref=shop,temp=mainmenu_l1_2012,cacheall=1 -->
</div>
<!-- end nav -->

<!-- start of header bottom links -->
<style>
#header-bottom-links ul {
  float: left;
  width: 739px;
}
#header-links {
  background:none!important; 
  padding:0!important; 
  margin:0!important; 
  border:0!important;
}
#header-links li {
  background: url("../images/core/tabpbg.gif") repeat-x 0 100%;
  border: 1px solid #D3D3D3;
  border-radius: 5px 5px 5px 5px;
  margin: 0 10px 0 0; padding: 8px 10px;
  float:left;
}
#header-links li.first {
  width: 635px;
}
#socialmedia-links {
  width: 219px!important; 
  text-align: center; 
  margin: 0!important; 
  padding: 0!important; 
  height: 30px!important;
}

#header-links li.last {
	width: 40px;
}
</style>



</div>


<!-- start of crumbtrail -->
<div class="Lcat_crumbtrail-con"><p class="Lcattree crumbtrail"><a href="/" class="treehome">Home</a><a href="http://www.superdrug.com/hair/icat/hair" class="menuFontNonSelected">Login</a></p>
</div>
<!-- end of crumbtrail -->


<!-- end header -->

<div id="content" class="clearfix">
<div id="coltwo">
<div id="categorylist">

<!-- ---------------  -->


<div class="checkoutL">

 <div class="container signinContent loginType_d">
    
        <h1>Please Sign In </h1>
        <div class="signininstruction">Please select one of the options below</div>
    
	<?php
    
	if(isset($_SESSION['user_access_error']))
	{
	?>
	<h2 class="error"><?php echo $_SESSION['user_access_error']; ?></h2>
	<?php
	unset($_SESSION['user_access_error']);
	}
	?>
       
        
            <div class="signin_2cols">
    
    
	
	<table>
	<tr>
	
	<td>
	
	<script type="text/javascript" src="js/login.js"></script>
	
	 <form name="secondloginform" id="secondloginform" method="post" action="login_check.php" onSubmit="return login_check();">
     
 



    <fieldset class="dontFloat f-loginiam registered">
    <div class="registeredContent">
		<div class="regsiteredInner">    	
            <h2>Returning Customer<span></span></h2>
            <p class="registertxt">Please login using your email and password.</p>
            
			<table>
			<tr>
			<td>
			<label for="email" id="lLoginEmail">Email:</label>
			</td>
			<td>
			<input type="text" name="email" id="email" value="" size="20" maxlength="150" onblur="checkUser();">
			</td>
			</tr>
			
			<tr>
			<td>
			 <label for="password" id="lLoginPassword" title="Your password must be at least 5 characters long">Password: </label>
			</td>
			<td>
			 <input type="password" name="password" id="password" size="20" maxlength="30">
			</td>
			</tr>
			
			</table>
            
            
            
           
    	
		</div>
        <div class="forgottenpassword"><a href="http://www.superdrug.com/bin/venda?ex=co_wizr-passwordreminder&bsref=superdrug">Forgot your password?</a></div>
        <div class="registeredbtn" id="buttons"><input type="image" src="images/bt_continue.gif" alt="SIGN IN" class="right btsignin"></div>	
    </div>	
   
    </fieldset>
    </form>
    
	</td>
	
	<td style="width:10px;"></td>
	
	<td style="width:500px;">
	
	
	
	 <form name="loginform" id="loginform" method="post" action="signup.php" onSubmit="return passEmail();">
      
        <input type="hidden" name="registered" value="0">
        <fieldset class="dontFloat f-loginiam notregister">
             <h2 ><span style="font-weight:bold; font-size:18px; color:#EC008C;">New?</span></h2>
            <p class="newcusttxt" style="float:left; width:225px; display:inline;">Welcome. Register here for Superdrug.com  </p>
            <div class="notregisterbtn" style="display:inline" id="buttons" style="clear:none;"><input type="image" src="images/bt_register.gif" alt="REGISTER" class="submit btregister"></div>
         
        </fieldset>
        </form>
    
	</td>
	
	</tr>
	</table>
	
	
       
	
	
	
   
    
    	
        
        <div class="clear"></div>    
   
    
   
    
    </div>
       

    </div>

</div>






<!-- ---------------  -->


 </div>

</div>
<div id="colone">


<div class="Lcat_colone"><div class="leftcolpromotions">


<ul>
	
	<li  class="first deliveryinfo"><a href="delivery_information.php" title="Delivery Information">Delivery Information</a></li>

	<li  class=" returnpolicy"><a href="returnpolicy.php" title="Return Policy">Return Policy</a></li>

	<li  class=" contactus"><a href="contact_us.php" title="Contact Us">Contact Us</a></li>

	

	<li  class=" faqs"><a href="faqs.php" title="FAQs">FAQs</a></li>

	<li  class=" termsandconditions"><a href="terms.php" title="Terms and Conditions">Terms and Conditions</a></li>

	<!--<li  class=" disclaimer"><a href="terms_of_use.php" title="Website Terms of Use">Website Terms of Use</a></li>

	

	
	<li  class=" privacypolicy"><a href="privacy.php" title="Privacy Policy">Privacy Policy</a></li>-->

	

	

	

</ul>


 
</div></div>
</div>
</div><!-- end content -->

<!-- start footer-->

<?php include('footer.php'); ?>
<div class="clear"></div>
<!--end footer -->

</div>

<!-- end wrapper -->
<script type="text/javascript">
Venda.Ebiz.awCookieChecker(location.href);
</script>
<!-- Start Peerius -->


<script type="text/javascript" src="//superdrug.peerius.com/tracker/peerius.page" charset="UTF-8"></script>
<!-- End Peerius -->




<!-- Start Net Media Planet Tracking -->
<script type="text/javascript">
var __stormJs = 't1.stormiq.com/dcv4/jslib/4413_430D23BF_7C97_4644_B4E3_BED7DF0D79EB.js';
</script>
<script type="text/javascript" src="/content/ebiz/superdrug/resources/js/netmediaplanet/track.js"></script>
<!-- End Net Media Planet Tracking -->









<!-- if on a non-secure page pull in the non-secure JS -->
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
	</script>


<!-- standard tag for non shopcart/register workflow-->
	<script type="text/javascript">
	
	
	_uacct = "UA-1503978-1";
	
	urchinTracker();
	
	</script>









<!-- Yahoo Universal -->
<script type="text/javascript">
<!-- Yahoo! Inc.
var ysm_accountid = "117I8CE25OH62D7CCURHPR026U8";
document.write("<SCR" + "IPT language='JavaScript' type='text/javascript' " 
+ "SRC=//" + "srv0.wa.marketingsolutions.yahoo.com" + "/script/ScriptServlet" + "?aid=" + ysm_accountid + "></SCR" + "IPT>");
// -->
</script>









<script type="text/javascript">
// This function keeps the nav open when using the Category Navigation (Navigation Settings) element
openNav('hair','');
</script>




</body>
</html>