{\rtf1}<?php


$category_id = $_REQUEST['category_id'];

include('../connection.php');



 
$frm_database = array(0);
 $query = mysql_query("SELECT position FROM category_slider_image WHERE category_id='$category_id'");
 while($p_data=mysql_fetch_array($query))
 {
	 $frm_database[] = $p_data[0];
 }

 $all = array(1,2,3,4,5,6,7,8,9,10);
 
 $available = array_diff( $all , $frm_database);


?>

<select name="position"  id="body_2">
<option value="">--Select position--</option>
<?php

foreach($available as $pos)
{


?>

<option value="<?php echo $pos; ?>"><?php echo $pos; ?></option>

<?php
}
?>

</select>