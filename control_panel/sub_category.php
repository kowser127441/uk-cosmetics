<?php


$category_id = $_REQUEST['category_id'];

include('../connection.php');


$query=mysql_query("SELECT * FROM sub_category WHERE category_id='$category_id' ORDER BY sub_category_name");

?>

<select name="sub_category"  id="body_2" onchange="changecategory3()">
<option value="">--Select Sub-Category--</option>
<?php
while($data=mysql_fetch_array($query))
{

$id = $data['sub_category_id'];
$name = $data['sub_category_name'];

?>

<option value="<?php echo $id; ?>"><?php echo $name; ?></option>

<?php
}
?>

</select>