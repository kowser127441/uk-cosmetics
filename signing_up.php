<?php
ob_start();

session_start();
error_reporting(0);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title> Sign up at LondonCosmeticsBd </title>

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




<link rel="shortcut icon" type="image/x-icon" href="http://www.superdrug.com/content/ebiz/superdrug/resources/images/core/favicon.ico"> 

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
<div class="Lcat_crumbtrail-con"><p class="Lcattree crumbtrail"><a href="/" class="treehome">Home</a><a href="http://www.superdrug.com/hair/icat/hair" class="menuFontNonSelected">Login</a></p>
</div>
<!-- end of crumbtrail -->


<!-- end header -->

<div id="content" class="clearfix">
<div id="coltwo">

<!-- ---------------  -->


<div class="clearfix" id="checkout">

<?php

if(
isset($_POST['title']) &&
isset($_POST['fname']) &&
isset($_POST['lname']) &&
isset($_POST['num']) &&
isset($_POST['address']) &&
isset($_POST['city']) &&
isset($_POST['cntry']) &&
isset($_POST['zipc']) &&
isset($_POST['usemail']) &&
isset($_POST['usxtmobile']) &&
isset($_POST['phone']) &&
isset($_POST['uspswd'])

)

{

include('signupClass.php');

$title = mysql_escape_string($_POST['title']);
$first_name = mysql_escape_string($_POST['fname']);
$last_name = mysql_escape_string($_POST['lname']);
$house = mysql_escape_string($_POST['num']);
$address = mysql_escape_string($_POST['address']);
$town_city = mysql_escape_string($_POST['city']);
$country = mysql_escape_string($_POST['cntry']);
$zip_code = mysql_escape_string($_POST['zipc']);
$email = mysql_escape_string($_POST['usemail']);
$mobile = mysql_escape_string($_POST['usxtmobile']);
$prefered_contact = mysql_escape_string($_POST['phone']);
$password = mysql_escape_string($_POST['uspswd']);


$signup = new Signup($title,$first_name,$last_name,$house,$address,$town_city,$country,$zip_code,$email,$password,$mobile,$prefered_contact);

$result =  $signup->getSignUp();

		if($result == true)
		{
			
		
			?>

			<h2>Welcome <?php echo $title.' '.$first_name.' '.$last_name.' ,' ;  ?></h2>
			<h3>You have sign up process has been successfully comleted . </h3>
			
			<h3>Your signup informations are : </h3>
			
			<table>
			<tr>
			<td>Name : </td>
			<td><?php echo $title.' '.$first_name.' '.$last_name ; ?></td>
			</tr>
			
			<tr>
			<td>Email : </td>
			<td><?php echo $email ; ?></td>
			</tr>
			
			<tr>
			<td>Country : </td>
			<td><?php echo $country ; ?></td>
			</tr>
			
			<tr>
			<td>Town/City : </td>
			<td><?php echo $town_city ; ?></td>
			</tr>
			
			<tr>
			<td>Address : </td>
			<td><?php echo $address ; ?></td>
			</tr>
			
			<tr>
			<td>Zip code : </td>
			<td><?php echo $zip_code ; ?></td>
			</tr>
			
			<tr>
			<td>Mobile : </td>
			<td><?php echo $mobile ; ?></td>
			</tr>
			
			<tr>
			<td>Prefered Contact : </td>
			<td><?php echo $prefered_contact ; ?></td>
			</tr>
			</table>
			
			<?php
		}
		
		else
		{
			//$_SESSION['error']=1;
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			die();
		}
}

else // WHEN DATA MISSING
{
$_SESSION['error']=2;
header('Location: ' . $_SERVER['HTTP_REFERER']);
die();

}

?>

<center>

<h3><a href="index.php"> <-Back to Home</a></h3>

</center>


 
</div>


<!-- ---------------  -->



</div>
<div id="colone">


<div class="Lcat_colone"><div class="leftcolpromotions">


    <ul class="promotions"> 
        
<li class="prolist1 freedeliveryover25 first">
        <a title="FREE DELIVERY on orders over £25 - Standard &pound;3 - Next day: &pound;5.50" href="http://www.superdrug.com/help+info/delivery-information/page/deliveryinfo"> 
         
        	<img src="http://www.superdrug.com/content/ebiz/superdrug/stry/freedeliveryover25/c-freedelivery.jpg" name=image alt="FREE DELIVERY on orders over &pound;25 - Standard &pound;3 - Next day: &pound;5.50">
            
            
        	
        	<span class="gt">&gt;</span> 
        </a>
     </li>  
 
<li class="prolist2 lefcolfreegiftswithpurhcs">
        <a title="Free gifts with purchase" href="http://www.superdrug.com/free-gifts/free-gifts-with-selected-purchases/icat/f_gwp"> 
         
        	<img src="http://www.superdrug.com/content/ebiz/superdrug/stry/lefcolfreegiftswithpurhcs/c-freegifts.jpg" name=image alt="Free gifts with purchase">
            
            
        	
        	<span class="gt">&gt;</span> 
        </a>
     </li>  
 
<li class="prolist3 holidayshop2013">
        <a title="Holiday Shop 2013" href="http://www.superdrug.com/events-2013/holiday-shop/page/holidayshop"> 
         
        	<img src="http://www.superdrug.com/content/ebiz/superdrug/stry/holidayshop2013/summershop_rlb.jpg" name=image alt="Holiday Shop 2013">
            
            
        	
        	<span class="gt">&gt;</span> 
        </a>
     </li>  
 
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
