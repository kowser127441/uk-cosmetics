<?php
ob_start();
session_start();


$user_email = $_SESSION['user_email'];

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title> EDIT ACCOUNT </title>

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

<!--<link rel="stylesheet" href="css/signup.css" type="text/css">-->

<link rel="stylesheet" href="css/container-skin.css" type="text/css" media="screen">

<link rel="stylesheet" href="css/container.css" type="text/css" media="screen">

<!--[if IE 6]><link rel="stylesheet" href="http://www.superdrug.com/content/ebiz/superdrug/resources/css/ie6.css" type="text/css" media="screen"><![endif]-->
<!--[if lte IE 7]><link rel="stylesheet" href="http://www.superdrug.com/content/ebiz/superdrug/resources/css/ie7.css" type="text/css" media="screen"><![endif]-->
<!--[if IE 8.000]><link rel="stylesheet" href="http://www.superdrug.com/content/ebiz/superdrug/resources/css/ie8.css" type="text/css" media="screen"><![endif]-->
 
<link rel="stylesheet" href="css/print.css" type="text/css" media="print"> 




<link rel="shortcut icon" type="image/x-icon" href="images/faviconi.ico"> 

<link rel="stylesheet" href="css/header.css" type="text/css" media="screen">
<script type="text/javascript" src="js/full.js"></script>

<script type="text/javascript" src="js/signup.js"></script>


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
<div class="Lcat_crumbtrail-con"><p class="Lcattree crumbtrail"><a href="/" class="treehome">Home</a><a href="http://www.superdrug.com/hair/icat/hair" class="menuFontNonSelected">My Account</a></p>
</div>
<!-- end of crumbtrail -->


<!-- end header -->
<?php include("connection.php"); ?>
<?php
$sql= mysql_query("SELECT * FROM user WHERE email='$user_email'");
while($data= mysql_fetch_array($sql))
	{
	   
		$user_first_name=$data['first_name'];
		$user_last_name=$data['last_name'];
		$user_name = $data['first_name'].' '.$data['last_name'];
		
		$user_house = $data['house'];
		$user_address= $data['address'];
		$user_town = $data['town'];
		$user_country = $data['country'];
		$user_post_code = $data['post_code'];
		$user_email = $data['email'];
		$user_password = $data['password'];
		$user_mobile = $data['mobile'];
		$prefered_contact = $data['prefered_contact'];
	}
	//var_dump($data);
	
?>
<div id="content" class="clearfix">

<div id="coltwo">

<!-- ---------------  -->


<div class="clearfix" id="checkout">

<div class="checkoutL">
		<div class="container addcontactaddress">
			<!-- YOU ARE ONLY PERMITTED TO CHANGE THE ORDER OF THE INCTEMPLATE TAGS WITHIN THIS TEMPLATE. YOU MAY NOT ADD OR CHANGE ANY OTHER CODE. -->
   
   <?php
	if(isset($_SESSION['error']) && $_SESSION['error'] == 1)
	{
   ?>
   
   <h2 class="error">Update process failed !!</h2>
   
   <?php
   }
   
   
   elseif(isset($_SESSION['error']) && $_SESSION['error'] == 2)
   {
   ?>
    <p id="addedmsg">Succesfully Updated 
	</p>
   
   <?php
   }
   
   elseif(isset($_SESSION['error']) && $_SESSION['error'] == 3)
   {
   ?>
    <h2 class="error">Signup process failed 
	<br/>
	Reason : Email already Used by another user . 
	</h2>
   
   <?php
   }
	unset($_SESSION['error']);
   
   ?>
   <form action="editing_myaccount.php" name="wizform" enctype="multipart/form-data" method="post" onsubmit="return validateForm()">


    <h1>Update</h1>
    
    

<!-- curparam2 used for conditional on wz_orbt-screen so that system errors appear on orzc and not co_comn-login -->

<fieldset>
<legend class="orzccaddr-personal">Personal Details</legend>
<div><label for="title">Title:<span class="re-waiHide"> (required)</span> <span class="required">*</span></label>
<select id="title" name="title" style="width: 245px;">
	<option value="Mr">Mr</option>
	<option value="Mrs">Mrs</option>
	<option value="Miss">Miss</option>
	<option value="Ms">Ms</option>
	<option value="">Other</option>
</select>
</div>
<div><label for="fname">First Name:<span class="re-waiHide"> (required)</span> <span class="required">*</span></label> <input type="text" maxlength="30" size="25" value="<?php echo $user_first_name; ?>" name="first_name" id="fname" style="width: 239px;"></div>

<div><label for="lname">Last Name:<span class="re-waiHide"> (required)</span> <span class="required">*</span></label> <input type="text" maxlength="30" size="25" value="<?php echo $user_last_name; ?>" name="last_name" id="lname" style="width: 239px;"></div>
</fieldset>

<fieldset>
	<legend class="orzcadddetail">Your contact details</legend>
    <p>Please enter your billing address. You'll be able to add an alternative delivery adddress before placing an order.</p> 
	
	
	<div><label for="num">House Name/Flat Number:<span class="re-waiHide"> (required)</span> <span class="required">*</span></label> <input type="text" maxlength="20" size="25" value="<?php echo $user_house; ?>" name="house" id="num" style="width: 239px;"></div>
	<div><label for="addr1">Address:<span class="re-waiHide"> (required)</span> <span class="required">*</span></label> <textarea name="address" id="addr1"  style="width:l239px;"><?php echo $user_address; ?></textarea></div>
	
	<div><label for="city">Town/City:<span class="re-waiHide"> (required)</span> <span class="required">*</span></label> <input type="text" maxlength="30" size="25" value="<?php echo $user_town; ?>" name="town" id="city" style="width: 239px;"></div>
	
	<div id="countrynewDiv">
    
    
    <label for="cntry" id="countryLabel">Country:<span class="re-waiHide"> (required)</span> <span class="required">*</span></label> <select onchange="hasState(document.getElementById('statelistbox'),document.getElementById('statetextbox'),document.getElementById('statelist'),this.value,'1');" id="cntrylist" class="admn_fieldsLarge" name="country" style="width: 245px;">
<option selected="" value="United Kingdom">United Kingdom</option>
</select>
    
    </div>
	<div id="zipcDiv"><label id="zipcLabel" for="zipc">Postcode:<span class="re-waiHide"> (required)</span> <span class="required">*</span></label><input type="text" maxlength="20" size="25" value="<?php echo $user_post_code; ?>" name="post_code" id="zipc" style="width: 239px;"></div>

	
	
<!--<div class="line gap"></div>
<div><label for="usemail">Email address<span class="re-waiHide"> (required)</span> <span class="required">*</span></label> <input type="text" size="25" value="" name="usemail" id="usemail" style="width: 239px;"></div>
<div>
	<label for="usemailconfirm">Confirm Email address<span class="re-waiHide"> (required)</span> <span class="required">*</span></label>
	<input type="text" style="width: 235px;" id="usemailconfirm" name="usemailconfirm" value="" size="25">
</div>
-->



<input type="checkbox" checked="" class="hide" value="1" id="ustandc" name="ustandc" style="border: medium none;">


<div id="usxtmobileDiv"><label for="usxtmobile">Mobile Number:</label><input type="text" value="<?php echo $user_mobile; ?>" size="35" name="mobile" id="usxtmobile" style="width: 239px;"></div>
<script language="JavaScript">jQuery("input[name=usxtmobile]").val("");</script>


<div><div><label for="phone">Preferred Contact Number:<span class="re-waiHide"> (required)</span> <span class="required">*</span></label><label class="dontFloat invisible" for="area">&nbsp;</label></div><div class="phonewrap" style="width: 245px;"><input type="text" maxlength="20" size="18" value="<?php echo $prefered_contact; ?>" name="prefered_contact" id="area" style="width:250px !important;"></div></div>
  
</fieldset>
	
<div></div>




 

<div id="buttons">

	<a style="" alt="back" href="login.php">
<!--	<img border="0" class="left" alt="PREVIOUS" src="images/bt_previous.gif"> -->
	</a>
	<input type="image" class="right" alt="Register" src="images/bt_confirm_account.gif" name="submit">

			

</div>



</form>

 
		</div>
	
	
	
		
	

	<div class="Lcat_orzccontent"></div>
</div>












 
</div>


<!-- ---------------  -->



</div>
<div id="colone"><div class="Lcat_myaccountnav"><div class="Lmyacccontactdetails contact"> 
<h2><span></span>Contact Details</h2> 
	 
	<ul> 
		<li class="first"><span class="addrName"><?php echo $user_name;?></span></li> 
         
		<li><?php echo $user_address; ?></li> 
		<li><?php echo $user_town.' '.$user_country;  ?></li> 
		
		<!-- if country is US or US entities display this formatting --> 
		 
 
		<!-- if country is NOT US or US entities display this formatting --> 
		
		<li><?php echo $user_country; ?></li> 
		<li><?php echo $user_town.' '.$user_post_code;  ?></li> 
		 
 
		<li><?php echo $user_country; ?></li> 
        <li><span class="addrPhone"><?php echo $user_mobile; ?></span></li> 
		
	</ul> 
	 
</div>
</div>
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