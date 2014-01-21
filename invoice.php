<?php
ob_start();
session_start();


$user_email = $_SESSION['user_email'];

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Order</title>

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
<link rel="stylesheet" href="css-table/text.css" type="text/css" media="screen" title="no title" />
<link rel="stylesheet" href="css-table/layout.css" type="text/css" media="screen" title="no title" />	
<link rel="stylesheet" href="css-table/plugin/dataTables.css" type="text/css" media="screen" title="no title" />
<link rel="stylesheet" href="css-table/custom.css" type="text/css" media="screen" title="no title">
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
<div class="Lcat_crumbtrail-con"><p class="Lcattree crumbtrail"><a href="index.php" class="treehome">Home</a><a href="order_history.php" class="menuFontNonSelected">Order History</a><a  class="menuFontSelected">Details Order History</a></p>
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
   <h1>My Order: </h1>
   
   <h2 style="font-size:16px; font-weight:bolder; color:red;">Payment Type - <?php echo $_GET['payment_type']; ?></h2>
   
   <br/><br/>
   
      <table class="data display datatable" id="example" style="width:750px;">
		<thead>
			<tr> 
                    <th>Order Id</th>
		           	<th>Product Name</th>
                    <th>Purchase Quantity</th>
					<th>Details</th>
                    <th>Payment Type</th>
                    <th>Price/Point</th>
					<th>Color</th>
                    <th>Size</th>
                    <th>Discount</th>
                    <th>Total</th>
                

			</tr>
		</thead>
		<tbody>
           
             <?php
			      $order_id = mysql_escape_string($_REQUEST['order_id']);
				  
				  
				  $total = 0 ;
				  
				   $total_point = 0;
			
						$product_sql = mysql_query("SELECT * FROM orders_product WHERE order_id='$order_id'");
						while($data3 = mysql_fetch_array($product_sql))
						{
							
							$product_id=$data3['product_id'];
							$quantity =$data3['quantity'];
							
							$query=mysql_query("SELECT * FROM product WHERE product_id='$product_id'");
							while($data=mysql_fetch_array($query))
							{
							$product_name=$data['product_name'];
							$point = $data['buy_point'];
						
							$details=$data['details'];
							$price=$data['sale_price'];
							$color=$data['color'];
							$size=$data['size'];
							
							$discount=$data['discount'];
							$price =$price-$discount;
							
							$total = $total + $price * $quantity ;
							
							$point =  $point * $quantity ;
							
							$total_point = $total_point+$point;
				
				?>
           
           
           
                                       
                    	
			<tr class="odd gradeX">

				<td class="center">
				<?php echo $order_id; ?> 
                </td>
                
            

				<td class="center">
				<a href="view_product.php?product_id=<?php echo $product_id;?>" target="_blank"><?php echo $product_name; ?></a> 
                </td>
                <td class="center">
				<?php echo $quantity; ?> 
                </td>
                
              
				<td class="center">
					 <?php	echo $details;?>
                </td>
				
				<td class="center">
					 <?php	echo $_GET['payment_type'];?>
                </td>
                
                <td class="center">
					 <?php	
					 
					  if($payment_type=='cash')
					 {
                     	echo 'BDT '. $price ; 
					 }
					 else
					 {
						 echo $point.' POINT';  
					 }
					 
					 
					 
					 
					  ?>
                </td>
                
                <td class="center">
					 <?php	echo $color; ?>
                     
                </td>
                
                 <td class="center">
					 <?php  echo $size;  
                     
                     ?>
                </td>
                
                <td class="center">
					 <?php  echo $discount;
                     ?>
                </td>
                
                 <td class="center">
					 <?php // echo $price*$quantity;
					 
					 if($payment_type=='cash')
					 {
					  echo 'BDT '.$price*$quantity;
					 }
					 else
					 {
							echo $point.' Point' ; 
					 }
					 
                     ?>
                </td>
                
                
				
		     </tr>
             
             
             
			
        <?php
					}
						}
					
					?>
                    
    
                        
		</tbody>
        
        <thead>
         <tr>
     <th colspan="10">               
      <h2 style="font-size:16px !important; font-weight:bolder !important; float:right !important;">
	  Sub Total - 
	  <?php
	  if($_GET['payment_type']=='cash')
	  {
	  
	   echo $total .' BDT';
	   }
	   else
	   {
	   echo $total_point,' Point';
	   }
	   ?>
	  
	  </h2>  
         </th>
         </tr>
         </thead>
        
				</table>
     
 
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