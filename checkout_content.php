<?php 
ob_start(); 

?>


<?php
error_reporting(0);
session_start();




include('connection.php');




?>


       


<div class="checkoutL">
	<div id="yourbasket">
	
<h1>Checkout</h1>

<?php


if(!isset($_SESSION['user_access']))
{
	$_SESSION['checkout']= 'not logged in';
?>

<h3 style="font-size:16px; color:#F00;">You are not Logged in . Please Login first . </h3>

	<a href="login.php">Login / Signup from Here .</a>
	
	
<?php
}

else
{
	$address = $_GET['address'];
	$payment = $_GET['payment'];
	
	//echo $address.'-----'.$payment;
	
		
	require('checkoutClass.php');
	
	$checkout = new Checkout();
	
	$checkout->checkout($address,$payment);
	
	if(isset($_SESSION['success']))
	{
		echo  '
			<h1 style="color:#F09">Order Successful </h1>
			<h1>We will contact with you as soon as possible</h1> ';
			 unset($_SESSION['cart']);	
			 unset($_SESSION['success']);
             
             
             // Sending Email to Client 
    	 
		 
										 //  recipients
											$to  = $_SESSION['user_email'] ; 
											
											// subject
											$subject = ' Confirmation Message From London-Cosmetics BD Website';
											
																							
												$message = "
												<html>
												<head>
												  <title> Confirmation Message From London-Cosmetics BD Website</title>
												</head>
												<body>
												  
												 <h2>Dear ".$_SESSION['user_name']." , <br/>We Receive your Order . We will contact with you as soon as possible .</h2>
												 <h3>Thank you for being with us .</h3>
												
												
												</body>
												</html>
												";
									
									// Always set content-type when sending HTML email
									
									$message= wordwrap($message,70);
									$headers = "MIME-Version: 1.0" . "\r\n";
									$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
									
									// More headers
									$headers .= 'From:London-Cosmetics BD website';
									
									// Mail it
								$checkout->email($to,$subject,$message,$headers);
					
                    
                    
                     // Sending Email to ADMIN 
    	 
		 
											
											$new_to='londoncosmeticsbd@gmail.com';
                                            $new_to2='abuhurayra.007@gmail.com';
                                            
									$new_subject = 'New Order From London-Cosmetics BD Website';
																					
												$new_message = "
												<html>
												<head>
												  <title> New Order From London-Cosmetics BD Website</title>
												</head>
												<body>
												 <ceter> 
												 <h2>You have a new order . </h2>
												 <p>Please visit <a href='http://londoncosmeticsbd.com/' target='_blank'>http://londoncosmeticsbd.com/</a> to see details </p>
												 
												</center>
												
												</body>
												</html>
												";
									
									
									
									// Mail it
									    $checkout->email($new_to,$new_subject,$new_message,$headers);
                                        $checkout->email($new_to2,$new_subject,$new_message,$headers);
             
             
             
             
	}
	
	if(isset($_SESSION['error']))
	{
		echo $_SESSION['error'] ;
				
			 unset($_SESSION['error']);
	}
	
	 
}


?>


<a href="index.php"><h1 style="color:#909">Back to Home</h1></a>
	
	



<p class="paymentInstructions">&nbsp;</p>

	
	</div>

<div class="Lcat_basketcontent"><div class="clear" style="height: 30px;display:block;"></div>

<style type="text/css">
.tabs .tabcontent {display:block; }
.Lcat_basketcontent{clear:both;}
</style>

<div class="tabs clearfix">
  <ul class="tabNavigation clearfix">
    <li class="selected"><a href="#deliveryinfo" title="BASKET INFORMATION"><span>Shipping information</span></a></li>
  </ul>
  <div id="deliveryinfo" class="tabcontent clearfix">


<p><strong>Please note:</strong><br/>
- Promotional discounts, vouchers and delivery charges will be applied at the checkout page<br/>
- For products that are on promotion, for example 'Buy one get one free' or '3 for 2' offers, you must also add the 'free' product to your basket as you would in store. (Please note this excludes gifts with purchases*) The discount will then be calculated at the "checkout" page.<br/>
- *If your order is subject to a 'free gift with purchase' offer, please note that this will be sent out automatically with your order and will not show as itemised in the checkout, or on your invoice. Also please note that free gift is subject to availability<br/>
- If your basket includes items with more than one promotional offer, you may be asked to select the discount you would like to apply to your order<br/>
</p>

<!-- <h2>SNOW UPDATE</h2>
<p>Due to the current extreme weather conditions, we may experience difficulties in delivering to certain parts of the country over this period, in particular South Wales.
 
We will of course endeavour to deliver in line with our standard delivery timelines wherever possible, but where we are unable to do so we apologise for any inconvenience caused.
</p><br><br> -->

<h2><b>Where we deliver:</b></h2>
<p>We deliver throughout the Bangladesh.</p>

<h2><b>Delivery services:</b></h2><br/>
<ul>
<li>- Free Express Delivery  Next working day only applies to Dhaka district. (order before 2pm): &nbsp;(** BDT 45.00 if order is below BDT 2000**).</li>

<!-- <li> <strong>FREE Standard Delivery on all orders until 17th June 2013. (Excludes Superdrug Photo)</strong> Normally 3-5 working days</li>-->
<li><strong>-Standard Delivery applies to outside of Dhaka district BDT 65.00  on all orders&nbsp;:&nbsp;</strong>Normally  3-5 working days.</li>
<!-- venda_block label=admins,ustype=R -->
<li><span style="font-weight:bold; color:#d91e63;"><strong>- NEW  FREE Collect in Store</strong>(available to pick up  within 1 working days)&nbsp; find out more about  Collect in Store</li>
 <!-- /venda_block label=admins -->
</ul>
<div class="clear"></div>
<br/>
<h3><b>Please note the following:</b></h3>
<ul>
 <ul>
  <li>- Order cut-off for all  delivery services is 2pm (Bangladesh Time). Orders placed after 2pm will be  treated, for the purposes of delivery, as having been  &nbsp;placed the next working  day.</li>
  <li>- Working days are  defined as Monday to Saturday (excluding bank and public holidays) &nbsp;therefore any orders placed after 2pm on  Saturday will not be processed until Monday.</li>
  <li>- Delivery will be  through London Cosmetics Ltd l or Parcel Force.</li>
  <li>- Larger deliveries may  require a signature to confirm receipt. If a signature cannot be obtained, the  carrier may ask a neighbor to sign for the delivery. Deliveries that require a  signature will not be left if a signature cannot be obtained. If the carrier  leaves the delivery with a neighbor or at your local post office, they will  leave a card for you telling you where it is. You may, when placing your order  online, specify a different delivery address than your payment address if that  is more convenient for you.</li>
  <li>- All delivery  timescales are approximate and subject to availability. The precise timing of a  delivery cannot be specified.</li>
  <li>- Customers are advised  that Express Delivery is not available for outside of Dhaka District. </li></ul>
</ul>


  </div>
</div>
</div>
<!-- start predictor -->



<!-- end predictor 
<p> (Estimated Discount -)</p>-->




</div>