<?php
session_start();

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





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="css/super_admin.css" />
     <link href="css/bootstrap.css" rel="stylesheet">
	 <link rel="shortcut icon" href="images/favicon.ico">
    
   
   
    <!-- Form Velidation--> 
    
<script type="text/javascript">
function validateForm1()
{
	
	
	//namel velidation -
	 var n=document.forms["myForm"]["category_name"].value;
	// alert("Cetagory Name field can't be empty");
	 
  if (n==null || n=="")
  {
  alert("Cetagory Name field can't be empty");
  return false;
  }
  
  
  //Description velidation -
	 var n=document.forms["myForm"]["description"].value;
  if (n==null || n=="")
  {
  alert("Description field can't be empty");
  return false;
  }
	
	
  
}
</script>

      
<!-- Table Start -->

<link rel="stylesheet" href="css-table/text.css" type="text/css" media="screen" title="no title" />
<link rel="stylesheet" href="css-table/layout.css" type="text/css" media="screen" title="no title" />	
<link rel="stylesheet" href="css-table/plugin/dataTables.css" type="text/css" media="screen" title="no title" />
<link rel="stylesheet" href="css-table/custom.css" type="text/css" media="screen" title="no title">




<script src="js-table/jquery/jquery-1.5.2.min.js"></script>
<script src="js-table/jquery/facebox.js"></script>
<script src="js-table/jquery/jquery.dataTables.min.js"></script>  <!-- it's for search display and work-->
<script src="js-table/dashboard.js"></script>   <!-- it's for search display and work-->

<script>
	
$(document).ready ( function () 
{
	Dashboard.init ();
});

</script>

<!-- Table END -->


<script type="text/javascript">


function confarmation()
{
var r=confirm("Are you sure you want to delete ?");
if (r==true)
{
//User Pressed okay. Delete

return true;

}
else
{
	return false;
//user pressed cancel. Do nothing
    }
 }
 
 </script>

   
   

  </head>

  <body>

   <div class="header">

<img src="images/logo.png" class="logo" />


</div>

<div class="divider">

</div>
<!--Main Menu-->

<div class="menu">
<?php
			include("orders_menu.php");
	?>
</div>


<!--Contents-->

<div class="content">
<center>
<h2>Order Details</h2>

</center>



 <?php
			include("orders_sidebutton.php");
			include '../connection.php';
	?>
    
    
     <div style="width:850px; margin-left:auto; margin-right:auto;">
     
     
      <center> <?php 
   if(isset($_SESSION['error']))
   
   {
	   
	   if($_SESSION['error']==1){
	   
	   echo "Not Successfully Updated";
	   }
	   
	   elseif($_SESSION['error']==2) {
		   
		   echo "Successfully Updated";
		   }
	   
	   } 
	   unset($_SESSION['error']);
	   
	   ?>
     </center>
    
     
     
    
    <h3>Client Information : </h3>

    <?php
	$order_id = mysql_escape_string($_REQUEST['order_id']);
	$information=mysql_query("SELECT * FROM order_table WHERE order_id='$order_id'");
	while($data=mysql_fetch_array($information))
			{
				$order_id=$data['order_id'];
				$user_email=$data['user_id'];
				$status=$data['status'];
				$shipping_address = $data['shipping_address'];
				$buy_point =$data['buy_point'];
				$payment_type =$data['payment_type'];
				
				
				$query= mysql_query("SELECT * FROM user WHERE email='$user_email' ");
				while($data2=mysql_fetch_array($query))
				{
				 $user_name=$data2['first_name'].' '.$data2['last_name'];
				
                 $user_phone=$data2['mobile'];
				 
				 $user_address=$data2['address'];
				
				 }
			}
			?>
          	
					
							
				 	
			

			
		
			
			
	
				
	
    
     
      <!-- <div style="float:right;">
       <h3>SHIPPING ADDRESS</h3>
       <table>
       <tr>
        <td>Address : </td>
        <td><?php// echo $shipping_address; ?></td>
        </tr>
        </table>
       </div>-->
        
    
  
    
    
  
      
       <table style="">
       
        <tr>
        
        <td>
        
        
        
        <table width="500">
        <tr>
            <td>Name : </td>
            <td><?php echo  $user_name; ?></td>
        </tr>
        <tr>
        <td>Email : </td>
        <td><?php echo $user_email ; ?></td>
        </tr>
        <tr>
        <td>Phone : </td>
        <td><?php echo $user_phone ; ?></td>
        </tr>
       
        
        <tr>
        <td>Address : </td>
        <td><p><?php echo $user_address; ?></p></td>
        </tr>
        
        </table>
        
        
        
        
        
        </td>
        
        
        <td>
       <div style="float:right;">
       <h3>Shipping Address</h3>
        Address : <?php echo $shipping_address; ?> 
        
        <h3 style="color:#03C;">Payment Type :  <?php echo $payment_type; ?> </h3>
       
        
        </div>
        
        </td>
        </tr>
        
        </table>
        
  <h3> Ordered Product : </h3>
       
        <h3 style="color:#39C; display:inline; margin-left:650px;">Status -  <?php echo $status; ?></h3>       
      
   
<table class="data display datatable" id="example" style="width:850px;">
		<thead>
			<tr> 
                    <th>Order Id</th>
		           	<th>Product Name</th>
                    <th>Purchase Quantity</th>
					<th>Details</th>
                    <th>Price/Point</th>
					<th>Color</th>
                    <th>Size</th>
                    <th>Discount</th>
                    <th>Total</th>
                    <th>Action</th>
                

			</tr>
		</thead>
		<tbody>
           
             <?php
			
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
				
				?>
           
           
           
                                       
                    	
			<tr class="odd gradeX">

				<td class="center">
				<?php echo $order_id; ?> 
                </td>
                
            

				<td class="center">
				<?php echo $product_name; ?> 
                </td>
                <td class="center">
                    <form action="change_quantity.php" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $product_id ?>">
                        <input type="hidden" name="order_id" value="<?php echo $order_id ?>">
                        <input type="text" value="<?php echo $quantity; ?>" name="quantity" style="width: 100px">
                    <input type="submit" value="change">
                    </form>
                </td>
                
              
				<td class="center">
					 <?php	echo $details;?>
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
                
                 <td class="center">
	            
                     <a href="remove_order_product.php?product_id=<?php echo $product_id?>"  onClick="return confarmation()">Remove</a>
                   
                  
                </td>
                
                
				
		     </tr>
			
        <?php
					}
						}
					
					?>
        
         
                        
		</tbody>
				</table>
     
     
    
	</div>
    
  
	



</div>

  </body>
</html>