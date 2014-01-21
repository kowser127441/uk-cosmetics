<?php
ob_start();
session_start();


$user_email = $_SESSION['user_email'];

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title> Order History </title>

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
<div class="Lcat_crumbtrail-con"><p class="Lcattree crumbtrail"><a href="/" class="treehome">Home</a><a href="order_history.php" class="menuFontNonSelected">My Order History</a></p>
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
   
   <h2 class="error">Remove History process failed !!</h2>
   
   <?php
   }
   
   
   elseif(isset($_SESSION['error']) && $_SESSION['error'] == 2)
   {
   ?>
    <p id="addedmsg">Order History Succesfully Removed 
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
   
      <table class="data display datatable" id="example" style="width:750px;">
		<thead>
			<tr>
		            <th>SL.</th>
			<th>Invoice ID</th>
					
                    <th>Customer Email</th>
                    <th>Total product</th>
                    <th>Total quantity</th>
                    <th>Total Amount / Point </th>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Action</th>
					
                

			</tr>
		</thead>
		<tbody>
                                        <?php
										
					include 'connection.php';
					
					

					$i=1;
					
					$sqlCategory=mysql_query("SELECT * FROM order_table WHERE user_id='$user_email' ORDER BY order_id DESC");
					$countRow=mysql_num_rows($sqlCategory);
					if($countRow>0){
						while($rowCategory=mysql_fetch_array($sqlCategory))
						{
							$order_id = $rowCategory['order_id'];
							$user_email= $rowCategory['user_id'];
							$status = $rowCategory['status'];
							$payment_type = $rowCategory['payment_type'];
							$buy_point = $rowCategory['buy_point'];
							
							$sql= mysql_query("SELECT * FROM user WHERE email='$user_email'");
							while($data = mysql_fetch_array($sql))
							{
								$user_name = $data['first_name'].' '.$data['last_name'];
							}
							
							// Getting ordered product number
							
							$product_sql = mysql_query("SELECT product_id FROM orders_product WHERE order_id='$order_id'");
							$product_number = mysql_num_rows($product_sql);
							
							// Getting total quantity
							$quantity_sql = mysql_query("SELECT SUM(quantity) FROM orders_product WHERE order_id='$order_id'");
							while($quantity_data= mysql_fetch_array($quantity_sql))
							{
							    $quantity = $quantity_data[0];
							}
							
							//
							
						
					?>
                    	
			<tr class="odd gradeX">

				<td><?php echo $i;?></td>
				<td class="center">
					 <?php 				
					echo $order_id;
					
                      ?>
                                        
                </td>
				<td class="center">
					 <?php	echo $user_name;  ?>
                </td>
                
                 
                
                 <td class="center">
					 <?php	echo $product_number;  ?>
                </td>
                
                 <td class="center">
					 <?php	echo $quantity;  ?>
                </td>
                
                <td>
                
                <?php
                 $total = 0 ;
				 $point = 0 ;
		$product_sql2 = mysql_query("SELECT * FROM orders_product WHERE order_id='$order_id'");
			while($data3 = mysql_fetch_array($product_sql2))
			{
				$product_id2=$data3['product_id'];
				$quantity2 =$data3['quantity'];
				
				$query2=mysql_query("SELECT * FROM product WHERE product_id='$product_id2'");
							while($data4=mysql_fetch_array($query2))
							{
							$price2=$data4['sale_price'];
							
							$point2=$data4['buy_point'];
							
							$discount2=$data4['discount'];
							$price2 =$price2-$discount2;
							
							$total = $total + $price2 * $quantity2 ;
							
							$point = $point + $point2 * $quantity2 ;
							
							}
				
			}
			
			         	 if($payment_type=='cash')
					 {
                     	echo 'BDT '. $total ; 
					 }
					 else
					 {
						 echo $point.' POINT';  
					 }
                
                
               // echo $total;
                
                ?>
                
                
                
                
                </td>
                
                <td class="center">
					 <?php	echo $rowCategory['date'];  ?>
                </td>
                 <td class="center">
					 <?php	echo $status;  ?>
                </td>
                
                 <td class="center">
					 <a href="invoice.php?order_id=<?php echo $order_id; ?>&payment_type=<?php echo $payment_type; ?>"> Details </a>
                     <?php
					 if($status =='new')
					 {
					 ?>
                      |
                   <a href="remove_order.php?order_id=<?php echo $order_id; ?>"> remove </a>
                   <?php
					 }
					 ?>
                </td>
                
                
                
				
		     </tr>
			
           <?php

					 $i=$i+1;
						}
					
					}
					 ?>
                        
		</tbody>
				</table>
     
 
		</div>
	
	
	
		
	

	<div class="Lcat_orzccontent"></div>
</div>












 
</div>


<!-- ---------------  -->



</div>

<?php include('common_right_side.php'); ?>


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