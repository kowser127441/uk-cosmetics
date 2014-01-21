
<?php


$sub_category_id = $_REQUEST['sub_category_id'];

include('../connection.php');


$query=mysql_query("SELECT * FROM product_type WHERE sub_category_id='$sub_category_id' ORDER BY type_name");

?>

<select name="Type"  id="body2" >
<option value="">--Select Type_Name--</option>
<?php
while($data=mysql_fetch_array($query))
{

$id = $data['type_id'];
$name = $data['type_name'];

?>

<option value="<?php echo $id; ?>"><?php echo $name; ?></option>

<?php
}
?>

</select>