<?php
session_start();

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
<div class="Lcat_crumbtrail-con"><p class="Lcattree crumbtrail"><a href="/" class="treehome">Home</a><a href="http://www.superdrug.com/hair/icat/hair" class="menuFontNonSelected">Login</a></p>
</div>
<!-- end of crumbtrail -->


<!-- end header -->

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
   
   <h2 class="error">Sign up process failed !!</h2>
   
   <?php
   }
   
   
   elseif(isset($_SESSION['error']) && $_SESSION['error'] == 2)
   {
   ?>
    <h2 class="error">Signup process failed 
	<br/>
	Reason : Data Missing !! 
	</h2>
   
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
   <form action="signing_up.php" name="wizform" enctype="multipart/form-data" method="post" onsubmit="return validateForm()">


    <h1>Register</h1>
    
    <p>Please register your details below to set up your Superdrug.com and Beautycard account. Fields with an asterisk (<span class="required">*</span>) must be completed as we cannot set up your account without them.</p>

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
<div><label for="fname">First Name:<span class="re-waiHide"> (required)</span> <span class="required">*</span></label> <input type="text" maxlength="30" size="25" value="" name="fname" id="fname" style="width: 239px;"></div>

<div><label for="lname">Last Name:<span class="re-waiHide"> (required)</span> <span class="required">*</span></label> <input type="text" maxlength="30" size="25" value="" name="lname" id="lname" style="width: 239px;"></div>
</fieldset>

<fieldset>
	<legend class="orzcadddetail">Your contact details</legend>
    <p>Please enter your billing address. You'll be able to add an alternative delivery adddress before placing an order.</p> 
	
	
	<div><label for="num">House Name/Flat Number:<span class="re-waiHide"> (required)</span> <span class="required">*</span></label> <input type="text" maxlength="20" size="25" value="" name="num" id="num" style="width: 239px;"></div>
	<div><label for="addr1">Address:<span class="re-waiHide"> (required)</span> <span class="required">*</span></label> <textarea name="address" id="addr1" style="width:l239px;"> </textarea></div>
	
	<div><label for="city">Town/City:<span class="re-waiHide"> (required)</span> <span class="required">*</span></label> <input type="text" maxlength="30" size="25" value="" name="city" id="city" style="width: 239px;"></div>
	
	<div id="countrynewDiv">
    
    
    <label for="cntry" id="countryLabel">Country:<span class="re-waiHide"> (required)</span> <span class="required">*</span></label> <select onchange="hasState(document.getElementById('statelistbox'),document.getElementById('statetextbox'),document.getElementById('statelist'),this.value,'1');" id="cntrylist" class="admn_fieldsLarge" name="cntry" style="width: 245px;">



	<option value="United States">United States</option> 
                            <option value="United Kingdom">United Kingdom</option> 
                            <option value="Afghanistan">Afghanistan</option> 
                            <option value="Albania">Albania</option> 
                            <option value="Algeria">Algeria</option> 
                            <option value="American Samoa">American Samoa</option> 
                            <option value="Andorra">Andorra</option> 
                            <option value="Angola">Angola</option> 
                            <option value="Anguilla">Anguilla</option> 
                            <option value="Antarctica">Antarctica</option> 
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                            <option value="Argentina">Argentina</option> 
                            <option value="Armenia">Armenia</option> 
                            <option value="Aruba">Aruba</option> 
                            <option value="Australia">Australia</option> 
                            <option value="Austria">Austria</option> 
                            <option value="Azerbaijan">Azerbaijan</option> 
                            <option value="Bahamas">Bahamas</option> 
                            <option value="Bahrain">Bahrain</option> 
                            <option value="Bangladesh"  selected="selected">Bangladesh</option> 
                            <option value="Barbados">Barbados</option> 
                            <option value="Belarus">Belarus</option> 
                            <option value="Belgium">Belgium</option> 
                            <option value="Belize">Belize</option> 
                            <option value="Benin">Benin</option> 
                            <option value="Bermuda">Bermuda</option> 
                            <option value="Bhutan">Bhutan</option> 
                            <option value="Bolivia">Bolivia</option> 
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                            <option value="Botswana">Botswana</option> 
                            <option value="Bouvet Island">Bouvet Island</option> 
                            <option value="Brazil">Brazil</option> 
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                            <option value="Brunei Darussalam">Brunei Darussalam</option> 
                            <option value="Bulgaria">Bulgaria</option> 
                            <option value="Burkina Faso">Burkina Faso</option> 
                            <option value="Burundi">Burundi</option> 
                            <option value="Cambodia">Cambodia</option> 
                            <option value="Cameroon">Cameroon</option> 
                            <option value="Canada">Canada</option> 
                            <option value="Cape Verde">Cape Verde</option> 
                            <option value="Cayman Islands">Cayman Islands</option> 
                            <option value="Central African Republic">Central African Republic</option> 
                            <option value="Chad">Chad</option> 
                            <option value="Chile">Chile</option> 
                            <option value="China">China</option> 
                            <option value="Christmas Island">Christmas Island</option> 
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                            <option value="Colombia">Colombia</option> 
                            <option value="Comoros">Comoros</option> 
                            <option value="Congo">Congo</option> 
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                            <option value="Cook Islands">Cook Islands</option> 
                            <option value="Costa Rica">Costa Rica</option> 
                            <option value="Cote D'ivoire">Cote D'ivoire</option> 
                            <option value="Croatia">Croatia</option> 
                            <option value="Cuba">Cuba</option> 
                            <option value="Cyprus">Cyprus</option> 
                            <option value="Czech Republic">Czech Republic</option> 
                            <option value="Denmark">Denmark</option> 
                            <option value="Djibouti">Djibouti</option> 
                            <option value="Dominica">Dominica</option> 
                            <option value="Dominican Republic">Dominican Republic</option> 
                            <option value="Ecuador">Ecuador</option> 
                            <option value="Egypt">Egypt</option> 
                            <option value="El Salvador">El Salvador</option> 
                            <option value="Equatorial Guinea">Equatorial Guinea</option> 
                            <option value="Eritrea">Eritrea</option> 
                            <option value="Estonia">Estonia</option> 
                            <option value="Ethiopia">Ethiopia</option> 
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                            <option value="Faroe Islands">Faroe Islands</option> 
                            <option value="Fiji">Fiji</option> 
                            <option value="Finland">Finland</option> 
                            <option value="France">France</option> 
                            <option value="French Guiana">French Guiana</option> 
                            <option value="French Polynesia">French Polynesia</option> 
                            <option value="French Southern Territories">French Southern Territories</option> 
                            <option value="Gabon">Gabon</option> 
                            <option value="Gambia">Gambia</option> 
                            <option value="Georgia">Georgia</option> 
                            <option value="Germany">Germany</option> 
                            <option value="Ghana">Ghana</option> 
                            <option value="Gibraltar">Gibraltar</option> 
                            <option value="Greece">Greece</option> 
                            <option value="Greenland">Greenland</option> 
                            <option value="Grenada">Grenada</option> 
                            <option value="Guadeloupe">Guadeloupe</option> 
                            <option value="Guam">Guam</option> 
                            <option value="Guatemala">Guatemala</option> 
                            <option value="Guinea">Guinea</option> 
                            <option value="Guinea-bissau">Guinea-bissau</option> 
                            <option value="Guyana">Guyana</option> 
                            <option value="Haiti">Haiti</option> 
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                            <option value="Honduras">Honduras</option> 
                            <option value="Hong Kong">Hong Kong</option> 
                            <option value="Hungary">Hungary</option> 
                            <option value="Iceland">Iceland</option> 
                            <option value="India">India</option> 
                            <option value="Indonesia">Indonesia</option> 
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                            <option value="Iraq">Iraq</option> 
                            <option value="Ireland">Ireland</option> 
                            <option value="Israel">Israel</option> 
                            <option value="Italy">Italy</option> 
                            <option value="Jamaica">Jamaica</option> 
                            <option value="Japan">Japan</option> 
                            <option value="Jordan">Jordan</option> 
                            <option value="Kazakhstan">Kazakhstan</option> 
                            <option value="Kenya">Kenya</option> 
                            <option value="Kiribati">Kiribati</option> 
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                            <option value="Korea, Republic of">Korea, Republic of</option> 
                            <option value="Kuwait">Kuwait</option> 
                            <option value="Kyrgyzstan">Kyrgyzstan</option> 
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                            <option value="Latvia">Latvia</option> 
                            <option value="Lebanon">Lebanon</option> 
                            <option value="Lesotho">Lesotho</option> 
                            <option value="Liberia">Liberia</option> 
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                            <option value="Liechtenstein">Liechtenstein</option> 
                            <option value="Lithuania">Lithuania</option> 
                            <option value="Luxembourg">Luxembourg</option> 
                            <option value="Macao">Macao</option> 
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                            <option value="Madagascar">Madagascar</option> 
                            <option value="Malawi">Malawi</option> 
                            <option value="Malaysia">Malaysia</option> 
                            <option value="Maldives">Maldives</option> 
                            <option value="Mali">Mali</option> 
                            <option value="Malta">Malta</option> 
                            <option value="Marshall Islands">Marshall Islands</option> 
                            <option value="Martinique">Martinique</option> 
                            <option value="Mauritania">Mauritania</option> 
                            <option value="Mauritius">Mauritius</option> 
                            <option value="Mayotte">Mayotte</option> 
                            <option value="Mexico">Mexico</option> 
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                            <option value="Moldova, Republic of">Moldova, Republic of</option> 
                            <option value="Monaco">Monaco</option> 
                            <option value="Mongolia">Mongolia</option> 
                            <option value="Montserrat">Montserrat</option> 
                            <option value="Morocco">Morocco</option> 
                            <option value="Mozambique">Mozambique</option> 
                            <option value="Myanmar">Myanmar</option> 
                            <option value="Namibia">Namibia</option> 
                            <option value="Nauru">Nauru</option> 
                            <option value="Nepal">Nepal</option> 
                            <option value="Netherlands">Netherlands</option> 
                            <option value="Netherlands Antilles">Netherlands Antilles</option> 
                            <option value="New Caledonia">New Caledonia</option> 
                            <option value="New Zealand">New Zealand</option> 
                            <option value="Nicaragua">Nicaragua</option> 
                            <option value="Niger">Niger</option> 
                            <option value="Nigeria">Nigeria</option> 
                            <option value="Niue">Niue</option> 
                            <option value="Norfolk Island">Norfolk Island</option> 
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                            <option value="Norway">Norway</option> 
                            <option value="Oman">Oman</option> 
                            <option value="Pakistan">Pakistan</option> 
                            <option value="Palau">Palau</option> 
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                            <option value="Panama">Panama</option> 
                            <option value="Papua New Guinea">Papua New Guinea</option> 
                            <option value="Paraguay">Paraguay</option> 
                            <option value="Peru">Peru</option> 
                            <option value="Philippines">Philippines</option> 
                            <option value="Pitcairn">Pitcairn</option> 
                            <option value="Poland">Poland</option> 
                            <option value="Portugal">Portugal</option> 
                            <option value="Puerto Rico">Puerto Rico</option> 
                            <option value="Qatar">Qatar</option> 
                            <option value="Reunion">Reunion</option> 
                            <option value="Romania">Romania</option> 
                            <option value="Russian Federation">Russian Federation</option> 
                            <option value="Rwanda">Rwanda</option> 
                            <option value="Saint Helena">Saint Helena</option> 
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                            <option value="Saint Lucia">Saint Lucia</option> 
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                            <option value="Samoa">Samoa</option> 
                            <option value="San Marino">San Marino</option> 
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                            <option value="Saudi Arabia">Saudi Arabia</option> 
                            <option value="Senegal">Senegal</option> 
                            <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                            <option value="Seychelles">Seychelles</option> 
                            <option value="Sierra Leone">Sierra Leone</option> 
                            <option value="Singapore">Singapore</option> 
                            <option value="Slovakia">Slovakia</option> 
                            <option value="Slovenia">Slovenia</option> 
                            <option value="Solomon Islands">Solomon Islands</option> 
                            <option value="Somalia">Somalia</option> 
                            <option value="South Africa">South Africa</option> 
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                            <option value="Spain">Spain</option> 
                            <option value="Sri Lanka">Sri Lanka</option> 
                            <option value="Sudan">Sudan</option> 
                            <option value="Suriname">Suriname</option> 
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                            <option value="Swaziland">Swaziland</option> 
                            <option value="Sweden">Sweden</option> 
                            <option value="Switzerland">Switzerland</option> 
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                            <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                            <option value="Tajikistan">Tajikistan</option> 
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                            <option value="Thailand">Thailand</option> 
                            <option value="Timor-leste">Timor-leste</option> 
                            <option value="Togo">Togo</option> 
                            <option value="Tokelau">Tokelau</option> 
                            <option value="Tonga">Tonga</option> 
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                            <option value="Tunisia">Tunisia</option> 
                            <option value="Turkey">Turkey</option> 
                            <option value="Turkmenistan">Turkmenistan</option> 
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                            <option value="Tuvalu">Tuvalu</option> 
                            <option value="Uganda">Uganda</option> 
                            <option value="Ukraine">Ukraine</option> 
                            <option value="United Arab Emirates">United Arab Emirates</option> 
                            <option value="United Kingdom">United Kingdom</option> 
                            <option value="United States">United States</option> 
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                            <option value="Uruguay">Uruguay</option> 
                            <option value="Uzbekistan">Uzbekistan</option> 
                            <option value="Vanuatu">Vanuatu</option> 
                            <option value="Venezuela">Venezuela</option> 
                            <option value="Viet Nam">Viet Nam</option> 
                            <option value="Virgin Islands, British">Virgin Islands, British</option> 
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                            <option value="Wallis and Futuna">Wallis and Futuna</option> 
                            <option value="Western Sahara">Western Sahara</option> 
                            <option value="Yemen">Yemen</option> 
                            <option value="Zambia">Zambia</option> 
                            <option value="Zimbabwe">Zimbabwe</option>





</select>
    
    </div>
	<div id="zipcDiv"><label id="zipcLabel" for="zipc">Postcode:<span class="re-waiHide"> (required)</span> <span class="required">*</span></label><input type="text" maxlength="20" size="25" value="" name="zipc" id="zipc" style="width: 239px;"></div>

	
	
<div class="line gap"></div>
<div><label for="usemail">Email address<span class="re-waiHide"> (required)</span> <span class="required">*</span></label> <input type="text" size="25" value="" name="usemail" id="usemail" style="width: 239px;"></div>
<div>
	<label for="usemailconfirm">Confirm Email address<span class="re-waiHide"> (required)</span> <span class="required">*</span></label>
	<input type="text" style="width: 235px;" id="usemailconfirm" name="usemailconfirm" value="" size="25">
</div>




<input type="checkbox" checked="" class="hide" value="1" id="ustandc" name="ustandc" style="border: medium none;">


<div id="usxtmobileDiv"><label for="usxtmobile">Mobile Number:</label><input type="text" value="" placeholder="01xxxxxxxxx" size="35" name="usxtmobile" id="usxtmobile" style="width: 239px;"></div>
<script language="JavaScript">jQuery("input[name=usxtmobile]").val("");</script>


<div><div><label for="phone">Preferred Contact Number:<span class="re-waiHide"> (required)</span> <span class="required">*</span></label><label class="dontFloat invisible" for="area">&nbsp;</label></div><div class="phonewrap" style="width: 245px;"><input type="text" maxlength="20" size="18" value="" name="phone" id="area" style="width:250px !important;"></div></div>
  
</fieldset>


<fieldset>
<legend class="orzccaddr-pwd">Please select a password which you will need to use to access your account online</legend>
<div><label title="Your password must be at least 5 characters long" for="uspswd">Password:<span class="re-waiHide"> (required)</span> <span class="required">*</span></label> <input type="password" size="25" value="" name="uspswd" id="uspswd" style="width: 239px;"></div>
<div><label title="Your password must be at least 5 characters long" for="uspswd2">Confirm Password:<span class="re-waiHide"> (required)</span> <span class="required">*</span></label> <input type="password" size="25" value="" name="uspswd2" id="uspswd2" style="width: 239px;"></div>
</fieldset>




	
<div><label class="dontFloat" for="ustandc">Please tick the box to accept <a href="http://www.superdrug.com/help+info/terms-and-conditions/page/termsandconditions&layout=staticpages" rel="popup console 550 450" target="_blank" title="Terms &amp; Conditions - opens in a new window">Terms &amp; Conditions</a><span class="required">*</span></label><input type="checkbox" value="check" id="ustandc" name="checkbox"></div>




 

<div id="buttons">

	<a style="" alt="back" href="login.php">
	<img border="0" class="left" alt="PREVIOUS" src="images/bt_previous.gif">
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
<?php include('common_right_side.php');?>
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