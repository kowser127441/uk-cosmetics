<?php 

$product_id = $_REQUEST['product_id'];




include('../connection.php');

$query = mysql_query("SELECT * FROM product WHERE product_id='$product_id' ");
while($data=mysql_fetch_array($query))
{

$product_name= $data['product_name'];
$category_id= $data['category_id'];
//$category_name= $data['category_name'];
$sub_category_id= $data['sub_category_id'];
//$sub_category_name= $data['sub_category_name'];

$purchase_price_2=$data['purchase_price_2'];
$sale_price=$data['sale_price'];

$quantity_2=$data['quantity_2'];
$quantity_1=$data['quantity_1'];


	

	
}


?>


<div style=" width:600px;">

<center><h3>Add Quantity From Here</h3></center>

<table align="center">

<tr>
<td>Product Name : </td>
<td><?php echo $product_name; ?></td>
</tr>


<td>Category : </td>
            <td>
               
                <?php 
		
		$sub_sql=mysql_query("SELECT * FROM category WHERE category_id='$category_id'");
		while($sub_data=mysql_fetch_array($sub_sql))
		{
		
		$new_sub_id = $sub_data['category_id'];
		$new_sub_name = $sub_data['category_name'];
		
		?>
        
        <?php if($category_id==$new_sub_id){ echo $new_sub_name;} ?> 
        
        <?php
		}
		?>
            
            </td>
</tr>

<tr>
<td>Sub-Category : </td>
<td>


        <?php 
		
		$sub_sql=mysql_query("SELECT * FROM sub_category WHERE category_id='$category_id'");
		while($sub_data=mysql_fetch_array($sub_sql))
		{
		
		$new_sub_id = $sub_data['sub_category_id'];
		$new_sub_name = $sub_data['sub_category_name'];
		
		?>
        
        <?php if($sub_category_id==$new_sub_id){ echo $new_sub_name;} ?> 
        
        <?php
		}
		?>

</td>
</tr>


<tr>
<td>Current Quantity : </td>
<td><?php echo $quantity_1+$quantity_2 ; ?></td>
</tr>

<tr>
<td>Current Purchase Price : </td>
<td><?php echo $purchase_price_2; ?></td>
</tr>

<tr>
<td>Current Sale Price : </td>
<td><?php echo $sale_price; ?></td>
</tr>




</table>
<br/>


<form action="adding_quantity.php" method="post" name="myForm" onsubmit="return validateForm()">

<input type="hidden" name="product_id" value="<?php echo $product_id ?>" />

    <table width="500" border="0">
 
         
        <tr>
        <td>Quantity : </td>
        <td> <input type="text" name="quantity_2"   /></td>
        </tr>
         <tr>
        <td>Purchase Price : </td>
        <td> <input type="text" name="purchase_price_2"   /></td>
        </tr>
          <tr>
        <td>Sale Price : </td>
        <td> <input type="text" name="sale_price" /></td>
        </tr>
          <tr>
       
        
       <tr><td></td><td><input type="submit" value="Update" /></td>
       </tr>  
 
</table>



</form>

</div>