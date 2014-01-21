<?php
$product_id = $_REQUEST['product_id'];
include('../connection.php');

$query=mysql_query("SELECT sale_price FROM product WHERE product_id='$product_id'");

while($data=mysql_fetch_array($query))
{
?>
<h3 style="color:#06F">BDT <?php echo $data[0]; ?></h3>
<?php
}

?>

