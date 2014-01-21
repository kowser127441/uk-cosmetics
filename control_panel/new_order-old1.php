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
    <title>Admin Panel-Creative Collection</title>
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
<h2>All New Orders</h2>

</center>

 <?php
			include("orders_sidebutton.php");
	?>
    
    
     <div style="width:850px; margin-left:auto; margin-right:auto; position:relative;">
    
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
    
    
   
<table class="data display datatable" id="example" style="width:850px;">
		<thead>
			<tr>
		            <th>SL.</th>
					<th>Invoice No.</th>
					<th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Customer Mobile</th>
                    <th>Total product</th>
                    <th>Total quantity</th>
                    <th>Total amount</th>
                    <th>Order Date</th>
					<th>Action</th>
                

			</tr>
		</thead>
		<tbody>
                                        <?php
										
					include '../connection.php';
					
					

					$i=1;
					
					$sqlCategory=mysql_query("SELECT * FROM order_table WHERE status='new' ORDER BY order_id DESC");
					$countRow=mysql_num_rows($sqlCategory);
					if($countRow>0){
						while($rowCategory=mysql_fetch_array($sqlCategory))
						{
							$order_id = $rowCategory['order_id'];
							$user_email= $rowCategory['user_id'];
							
							$sql= mysql_query("SELECT * FROM user WHERE email='$user_email'");
							while($data = mysql_fetch_array($sql))
							{
								$user_name = $data['first_name'].' '.$data['last_name'];
								$mobile = $data['mobile'];
							}
							
							// Getting ordered product number
							
							$product_sql = mysql_query("SELECT product_id FROM orders_product WHERE order_id='$order_id'");
							$product_number = mysql_num_rows($product_sql);
							
							
							// Getting total quantity
							$quantity_sql = mysql_query("SELECT SUM(quantity) FROM orders_product WHERE order_id='$order_id'");
							while($quantity_data= mysql_fetch_array($quantity_sql))
							{
							    $quantity = $quantity_data[0];
								
							
						// Getting total amount
						
						$total_price = 0;
						
							$t_p_sql = mysql_query("SELECT * FROM orders_product WHERE order_id='$order_id'");
							while($t_p_data = mysql_fetch_array($t_p_sql))
							{
								$t_p_id = $t_p_data['product_id'];
								$t_p_qty = $t_p_data['quantity'];
								
								$price_sql = mysql_query("SELECT * FROM product WHERE product_id='$t_p_id'");
								while($price_data = mysql_fetch_array($price_sql))
								{
									$t_p_price = $price_data['sale_price'] - $price_data['discount'];	
									
								}
								
								$qty_price = $t_p_price * $t_p_qty ; 
								
								$total_price = $total_price + $qty_price ; 
								
								
								
							}
						/*
							$amount_sql = mysql_query("SELECT * FROM product WHERE product_id = '$product_number'");
							while($amount_data= mysql_fetch_array($amount_sql))
								{
									$discount = $amount_data['discount'];
									$price = $amount_data['sale_price']; 
									
									$price = $sale_price-$discount ;
								
								
								
							
							}
							
							*/
						
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
					 <?php	echo $user_email;  ?>
                </td>
                <td class="center">
					 <?php	echo $mobile;  ?>
                </td>
                
                 <td class="center">
					 <?php	echo $product_number;  ?>
                </td>
                
                 <td class="center">
					 <?php	echo $quantity;  ?>
                </td>
                <td class="center">
					 <?php	echo $total_price;  ?>
                </td>
                
                <td class="center">
					 <?php	echo $rowCategory['date'];  ?>
                </td>
                
                
                <td class="center">
					<a href="order_details.php?order_id=<?php echo $order_id; ?>"> Details </a> |
                   <a href="seen.php?order_id=<?php echo $order_id; ?>"> Seen </a> |
                  <a href="remove_order.php?order_id=<?php echo $rowCategory['order_id']; ?>" onClick="return confarmation()"> Remove </a>
                </td>
                
				
		     </tr>
			
           <?php

					 $i=$i+1;
						}
					
					}
					}
					
					
					 ?>
                        
		</tbody>
				</table>
     
      
    
	</div>
    
  




</div>

  </body>
</html>