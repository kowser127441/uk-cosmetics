<?php
session_start();
include ('../connection.php');
if (isset($_SESSION['admin_access'])) 
{
}
else
{
	header("Location:logout.php");
	}
	
// Session Time out


$inactive =600; // Set timeout period in seconds

if (isset($_SESSION['timeout'])) {
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $inactive) {
        session_destroy();
        header("Location: logout.php");
		echo "session time out";
    }
}
$_SESSION['timeout'] = time();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
<!--	<title>Uk-Cosmetics Invoice</title>-->
	
	<link rel='stylesheet' type='text/css' href='css/style_invoice.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<!--<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>-->

</head>

<body>
 <?php
	$order_id = mysql_escape_string($_REQUEST['order_id']);
	$information=mysql_query("SELECT * FROM order_table WHERE order_id='$order_id'");
	while($data=mysql_fetch_array($information))
			{
				$order_id=$data['order_id'];
				$user_email=$data['user_id'];
				$status=$data['status'];
				$date = $data['date'];
				$payment_type = $data['payment_type'];
				$shipping_address = $data['shipping_address'];
				$buy_point = $data['buy_point'];
				
				$query= mysql_query("SELECT * FROM user WHERE email='$user_email' ");
				while($data2=mysql_fetch_array($query))
				{
				 $user_name=$data2['first_name'].' '.$data2['last_name'];
				
                 $user_phone=$data2['mobile'];
				 
				 $user_address=$data2['address'];
				 
				 
				
				 }
			}
			?>
   

	<div id="page-wrap">

		<p id="header" name="">London Cosmetics Invoice </p>
		
		<div id="identity">
        <br/>
		
            
			<h3><?php echo $user_name; ?></h3>
    <p style="width:200px">        
	<?php echo $user_address; ?>
<br/>
Phone: <?php echo $user_phone; ?></p>

            <div style="float:right;">

             <!-- <div id="logoctr">
                <a  id="change-logo" title="Change logo">Change Logo</a>
                <a  id="save-logo" title="Save changes">Save</a>
                |
                <a id="delete-logo" title="Delete logo">Delete Logo</a>
                <a  id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>-->

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="images/logo.png" alt="logo" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		 <center>
         
                 
         <script>
        function printpage()
          {
         
		   var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
          }
        </script>


<input type="button" id="printpagebutton" style="width:100px; height:30px"  value="Print" onclick="printpage()">


         
         
         
         
         </center>
		<div id="customer">
			<h3>Shipping Address:</h3>
            <p style="width:200px;"> <?php echo $shipping_address;?></p>
            
            
            <br/><br/>
            
            <h3 style="color:#00C;">Payment Type : <span><?php echo $payment_type; ?></span></h3>
            
            
           
            

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea><?php echo $order_id; ?></textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date Time</td>
                    <td><textarea id="date"> <?php echo $date; ?></textarea></td>
                </tr>
               

            </table>
		
		</div>
        
          
		
		<table id="items" >
		
		  <tr>
		      <th>Product Code</th>
		      <th>Product Name</th>
		      <th>Quantity</th>
		      <th>Price / Point</th>
              <th>Discount</th>
              <th>Size</th>
              <th>Color</th>
              <th>Total</th>
		  </tr>
          
           <?php
		   
		   $sub_total = 0 ; 
		   $sub_point = 0 ; 
			
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
							$product_code = $data['product_code'];
							
							
							$discount=$data['discount'];
                                                        
                                                        $percent = $discount / 100;
							$price =$price-$discount;
							
							$sub_total = $sub_total + $price * $quantity ;
							
							$sub_point = $sub_point + $point * $quantity;
				
				?>
		  
		  <tr class="item-row" >
		      <td class="item-name"><div class="delete-wpr"><?php echo $product_code; ?></div></td>
		      <td class="description"><?php echo $product_name; ?></td>
		      <td><?php echo $quantity; ?></td>
              
                 <td>
					 
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
              <td><?php  echo $percent.'%'; ?></td>
              <td><?php  echo $size; ?></td>
              <td><?php  echo $color; ?></td>
		       <td>
					 <?php 
					 
					 if($payment_type=='cash')
					 {
					  echo 'BDT '.$price*$quantity;
					 }
					 else
					 {
							echo $buy_point.' Point' ; 
					 }
                     ?>
                </td>
                
             
		      
		  </tr>
          
        
		  
          <?php
							}
						}
		  ?>
		  
		 <!-- <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row   </a></td>
		  </tr>-->
		  
		  		
		</table>
<table align="right">

<tr>
		     
		      <td colspan="4" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">
               <?php  
               if($payment_type=='cash')
					 {
					  echo 'BDT '.$sub_total;
					 }
					 else
					 {
							echo $sub_point . ' Point' ; 
					 }
                     ?>
              
              
              
              </div></td>
		  </tr>
		  



</table>		
		
	
	</div>
	
</body>

</html>