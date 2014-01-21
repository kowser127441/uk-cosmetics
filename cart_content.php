<?php 
ob_start(); 

?>


<?php
error_reporting(0);
session_start();




include('connection.php');




include("includes/functions.php");
	
		if($_REQUEST['command']=='add' && $_REQUEST['product_id']>0){
		$pid=$_REQUEST['product_id'];
		$quantity=$_REQUEST['qty'];
		addtocart($pid,$quantity);
		
		
		include('productClass.php');
		
		$product = new Product($pid);
		$product_name = $product->getProductInfo($pid);
		
		
		$_SESSION['cart_add_success'] = 'You have added '.$quantity.' of '.$product_name['product_name'].' to your basket.' ;
		 header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit();
		//header("location:shoppingcart.php");
		//exit();
	}
	
	if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
		remove_product($_REQUEST['pid']);
	}
	else if($_REQUEST['command']=='clear'){
		unset($_SESSION['cart']);
	}
	else if($_REQUEST['command']=='update'){
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=intval($_REQUEST['product'.$pid]);
			
			if($q>0 && $q<=999){
				$_SESSION['cart'][$i]['qty']=$q;
			}
			else{
				$msg='Some proudcts not updated!, quantity must be a number between 1 and 999';
			}
		
		}
	}

?>


       



<script language="javascript">
	function del(pid){
		if(confirm('Do you really mean to delete this item')){
			document.form1.pid.value=pid;
			document.form1.command.value='delete';
			document.form1.submit();
		}
	}
	function clear_cart(){
		if(confirm('This will empty your shopping cart, continue?')){
			document.form1.command.value='clear';
			document.form1.submit();
		}
	}
	function update_cart(){
		document.form1.command.value='update';
		document.form1.submit();
	}


</script>






<div class="checkoutL">
	<div id="yourbasket">
	
<h1>Shopping basket</h1>




	


<style>
table#topcontent th {
padding:0;
}

table#topcontent .btCheckout {margin-top:30px;}
</style>
<table width="100%" cellpadding="0" cellspacing="0" id="topcontent">
	 
  <tr>
	<td valign="top" align="right" style="padding-right:0">
  <a href="" id="checkout_1"><input type="image"  src="images/bt_checkout.gif" alt="CHECKOUT" class="right btCheckout"></a>
  </td>
</tr>
</table>

<form name="form1" method="GET">

<input type="hidden" name="pid" />
<input type="hidden" name="command" />

<table summary="Information about each item in your basket" class="wizrtable" width="100%" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<th scope="col" class="thumb"><span>ITEM</span></th>
		<th scope="col" class="name"><span>Product Name</span></th>
		<th scope="col" class="priceeach" style="width:100px"><span>Price</span></th>
		<th scope="col" class="quantity"><span>Quantity</span></th>
		<th scope="col" class="totalprice" style="width:100px"><span>Total Amount</span></th>
        <th scope="col" class="totalprice" style="width:100px"><span>Total Earn Point</span></th>
        <th scope="col" class="totalprice" style="width:100px"><span>Total Buy Point</span></th>
		<th scope="col" class="remove"><span>Remove</span></th>
	</tr>
	</thead>
	<tbody>
	
    
    
    <?php

include('productClass.php');

$total_sale_price = 0;
$total_discount_price = 0;

$total_earn_point = 0 ;
$total_buy_point = 0 ;

				if(is_array($_SESSION['cart'])){
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];
					
					$details=new Product($pid);
					$product_details= $details->getProductInfo($pid);
					
					if($q==0) continue;
					
					$total_sale_price = $total_sale_price + $product_details['sale_price'] *$q ;
					$total_discount_price = $total_discount_price + $product_details['discount_price'] *$q ;
					
					$total_earn_point = $total_earn_point + $product_details['earn_point']*$q ;
					$total_buy_point = $total_buy_point + $product_details['buy_point']*$q ;
			?>
    
    
	
	<!-- Start Product Cart -->
	<tr>
	
		
		<td class="thumb"><a href="view_product.php?product_id=<?php echo $pid; ?>"  target="_blank"><img src="<?php echo $product_details['picture_url'] ;?>" style="width:100px; height:100px;" border=0 name="thumb" alt="<?php echo $product_details['product_name'] ;?>"></a></td>
		
		<td class="name">
		
		
		<h2><a href="view_product.php?product_id=<?php echo $pid; ?>" target="_blank"><?php echo $product_details['product_name'] ;?></a></h2>
		
		      
                               
		</td>
		
		
		<td class="priceeach">BDT <?php echo $product_details['sale_price'] ;?> 	<!-- <p>&#163;2.50 per 10g</p> -->   </td>
		<td class="quantity"><input type="text" name="product<?php echo $pid?>" size="2" maxlength="3" value="<?php echo $q?>"></td>
		<td class="totalprice">BDT <?php echo $product_details['sale_price']*$q?></td>
        
        <td ><?php echo $product_details['earn_point'].' x '.$q.' = '.$product_details['earn_point']*$q?></td>
        <td ><?php echo $product_details['buy_point'].' x '.$q.' = '.$product_details['buy_point']*$q?></td>
        
		<td class="remove"><a href="javascript:del(<?php echo $pid?>)"><img src="images/bt_remove.gif" alt="REMOVE <?php echo $product_details['product_name'] ;?>" border="0"></a>
        </td>
	</tr>
    
    <!--End Product-->
    
      <?php					
				}
				}
				else{
				echo "<tr bgColor='#FFFFFF'><td>There are no items in your shopping cart!</td>";
			}
			?>
	

	<tr class="orsctotal" style="background-color:#F5F5F5 !important;">
		<th scope="row" colspan="4">Sub total:<span>(Before Discount)</span></th>
		<td  class="basketTot">BDT <?php echo $total_sale_price ?></td>
        <td  class="basketTot"> <?php echo $total_earn_point; ?><br/><p style="font-size:10px">POINTS</p></td>
        <td  class="basketTot" ><?php echo $total_buy_point; ?><br/><p style="font-size:10px">POINTS</p></td>
        <td></td>
       
	</tr>
    
    
    
       
    <tr class="proBorder">
    	<td colspan="4" class="nopaddR">
        
    	
        </td>
        <td colspan="2">
        	
        </td>
    </tr>
    <tr class="orsctotal proBorder">
    
    <td colspan="3">
    <?php	
	session_start();
	$user_email = $_SESSION['user_email']; 
	
    $user_sql = mysql_query("SELECT * FROM user WHERE email='$user_email'");
	while($user_data=mysql_fetch_array($user_sql))
	{
		$user_house = $user_data['house'];
		$user_address= $user_data['address'];
		$user_town = $user_data['town'];
		
		$address = $user_house.' '.$user_town.''.$user_address;
		
	}
    
    
    
    ?>
    
    <div class="promotionsTotalHead" style="float:left !important; padding-bottom:0 !important;"><h3>Your shipping Address : </h3>
    
    <script type="text/javascript">
	
	function changeText(text){
	
		document.getElementById('shipping_address').value = text ;
		
		var txtar = document.getElementById('shipping_address');
		
		if(txtar.readOnly==false)
		{
				txtar.readOnly=true;
		}
		
		else
		{
			txtar.readOnly=false;	
		}
		
		
		setUrl();
		
		
	}
	
	
	function setUrl(){
	
	var oDDL = document.getElementById('shipping_address').value;
	var payment = $('input:radio[name="payment_type"]:checked').val();
	
	var oLink = document.getElementById('checkout_1');    
	oLink.href = 'checkout.php?address='+oDDL+'&payment='+payment;
			
			var oLink2 = document.getElementById('checkout_2');    
			oLink2.href = 'checkout.php?address='+oDDL+'&payment='+payment;
		
		
		
	}
	
	
	// Changing checkout href
	
			
		
		window.onload = function() {
			var oDDL = document.getElementById("shipping_radio");
			var point  = document.getElementById("total_buy_point").value;
			var user_point  = document.getElementById("user_earn_point").value;
			
			var oLink = document.getElementById('checkout_1');    
			oLink.href = 'checkout.php?address='+oDDL.value+'&payment=cash';
			
			var oLink2 = document.getElementById('checkout_2');    
			oLink2.href = 'checkout.php?address='+oDDL.value+'&payment=cash';
				
		};
		

	
	
	</script>
    
    
     <input type="radio" id="shipping_radio" name="shiping" value="<?php echo $address; ?>"  checked="checked" onclick="changeText('<?php echo $address; ?>')">Home Delivery
    <input type="radio" id="shipping_radio" name="shiping" value="From Store"  onclick="changeText('From Store : \n Our Store Address:\n Gulshan 1, DCC Market, Shop No.207')" >From Store
    </div>
    
       

    
    
    <textarea id="shipping_address" name="shipping_address" style="width:300px; height:70px;" onkeyup="setUrl()" ><?php echo $address; ?></textarea>
    </td>
    
    
    
      <td colspan="3"><div class="promotionsTotalHead"><h3>Total Including Discounts:</h3> </div>
      
      <br/>
      
      <h2 style="font-weight:bolder; color:#069; float:right !important;">Payment Method : </h2>
      
      </td>
      <td colspan="2"><div class="promotionsTotal"><h3>BDT <?php echo $total_discount_price; ?></h3></div>
    
      <input type="radio" name="payment_type" value="cash" checked="checked" onclick="setUrl()" /> By Cash <br/>
      
      <?php
	  if(isset($_SESSION['user_access']))
	  {
		  $point_sql = mysql_query("SELECT earn_point FROM user WHERE email='$_SESSION[user_access]'");
		  while($pp= mysql_fetch_array($point_sql))
		  {
			$user_earn_point = $pp[0];  
		  }
		
		if($user_earn_point > $total_buy_point)
		{	
	
	  
	  ?>
      
      <input type="radio" name="payment_type" value="point" onclick="setUrl()" /> By Points
      
      
      <?php
		}
		?>
        <span style="color:#00C; font-size:10px; font-weight:300;">(Available - <?php echo $user_earn_point;?> points)</span>
        <?php
	  }
	  ?>
      
      
      
      </td>
    </tr>
    	
	
</table>
<input type="hidden" id="total_buy_point" value="<?php echo $total_buy_point; ?>" />
<input type="hidden" id="user_earn_point" value="<?php echo $user_earn_point;?>" />
</form>
	
	
	<div id="buttons" style="padding-top:10px !important;">
<a href="index.php"><img src="images/bt_continueshopping.gif" alt="Continue Shopping" border="0" class="left btContinueShopping"></a>
<input type="image" onclick="update_cart()" src="images/bt_updatebasket.gif" alt="Update Basket" class="left btUpdateBasket">

<a onclick="clear_cart()" style="cursor:pointer; margin-left:50px;">Clear Basket </a>


	 <a href="" id="checkout_2"><input type="image"  src="images/bt_checkout.gif" alt="CHECKOUT" class="right btCheckout"></a>
	




</div>



<p class="paymentInstructions">&nbsp;</p>

	
	</div>

<div class="Lcat_basketcontent"><div class="clear" style="height: 30px;display:block;"></div>

<style type="text/css">
.tabs .tabcontent {display:block; }
.Lcat_basketcontent{clear:both;}
</style>

<div class="tabs clearfix">
  <ul class="tabNavigation clearfix">
    <li class="selected"><a href="#deliveryinfo" title="BASKET INFORMATION"><span>Basket information</span></a></li>
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