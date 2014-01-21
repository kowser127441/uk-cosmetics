<?php 

$product_id = $_REQUEST['product_id'];

include('../connection.php');

$query = mysql_query("SELECT * FROM product WHERE product_id='$product_id'");
while($data=mysql_fetch_array($query))
{

$product_name= $data['product_name'];
$category_id= $data['category_id'];
$sub_category_id= $data['sub_category_id'];
$terms=$data['terms'];
$purchase_price_1=$data['purchase_price_1'];
$sale_price=$data['sale_price'];
$details= $data['details'];

$size= $data['size'];
$color= $data['color'];
$buy_point=$data['buy_point'];
$sell_point=$data['sell_point'];
	

	
}


?>


<div style=" width:600px;">

<center><h3>Edit Form</h3></center>

<form action="editing_product.php" method="post" name="myForm" onsubmit="return validateForm()">

<input type="hidden" name="product_id" value="<?php echo $product_id ?>" />

    <table width="500" border="0">
 
         
         <tr>
        <td>Product Name : </td>
        <td>
       	<input type="text" name="product_name" value="<?php echo $product_name ?>"  />
        </td>
        </tr>
        
      
        
        <tr>
        <td>Sub Category : </td>
        <td> 
       
         <select name="sub_category_id">
        
        
        <?php 
		
		$sub_sql=mysql_query("SELECT * FROM sub_category WHERE category_id='$category_id'");
		while($sub_data=mysql_fetch_array($sub_sql))
		{
		
		$new_sub_id = $sub_data['sub_category_id'];
		$new_sub_name = $sub_data['sub_category_name'];
		
		?>
        
        <option value="<?php echo $new_sub_id; ?>" <?php if($sub_category_id==$new_sub_id){ echo 'selected="selected" ' ; } ?> ><?php echo $new_sub_name; ?> </option>
        
        <?php
		}
		?>
        
        
        </select>
        
        
        
        </td>
        </tr>
        
         <tr>
        <td>Details : </td>
        <td> <textarea name="details" ><?php echo $details; ?> </textarea> </td>
        </tr>
        
        <tr>
        <td>Terms : </td>
        <td> <textarea name="terms" ><?php echo $terms; ?> </textarea> </td>
        </tr>
         
         <tr>
        <td>Purchase Price : </td>
        <td> <input type="text" name="purchase_price_1" value="<?php echo $purchase_price_1; ?>"  /></td>
        </tr>
          <tr>
        <td>Sale Price : </td>
        <td> <input type="text" name="sale_price" value="<?php echo $sale_price; ?>"  /></td>
        </tr>
          <tr>
        <td>Buy Point : </td>
        <td> <input type="text" name="buy_point" value="<?php echo $buy_point; ?>"  /></td>
        </tr>
          <tr>
        <td>Sale Point : </td>
        <td> <input type="text" name="sell_point" value="<?php echo $sell_point; ?>"  /></td>
        </tr>
        
          <tr>
        <td>Size : </td>
        <td> <input type="text" name="size" value="<?php echo $size; ?>"  /></td>
        </tr>
        
          <tr>
        <td>Color : </td>
        <td> <input type="text" name="color" value="<?php echo $color; ?>"  /></td>
        </tr>
        
       <tr><td></td><td><input type="submit" value="Update" /></td>
       </tr>  
 
</table>



</form>

</div>