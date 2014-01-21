<?php


$category_id = $_REQUEST['category_id'];
$sub_category_id = $_REQUEST['sub_category_id'];
$brand_id = $_REQUEST['brand_id'];





include('../connection.php');



$query=mysql_query("SELECT * FROM product WHERE category_id='$category_id' AND sub_category_id='$sub_category_id' AND brand_id='$brand_id' AND discount_available='yes' ORDER BY product_name");

?>

<select name="product_id" id="body_3" onchange="changecategory3()">
<option value="0">--Select Product--</option>
<?php
while($data=mysql_fetch_array($query))
{

$id = $data['product_id'];
$name = $data['product_name'];

?>

<option value="<?php echo $id; ?>"><?php echo $name; ?></option>

<?php
}

?>

</select>