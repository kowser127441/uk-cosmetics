<?php

include('submenu.php');

$sub_menu = new SubMenu(1);

$data= $sub_menu->getSubcategory();

$offers = $sub_menu->offers();

foreach($data as $key)
{
	echo $key['sub_category_id'].'<br/>';
	echo $key['sub_category_name'].'<br/><br/><br/>';
}
// var_dump($data);

$brand = $sub_menu->getBrand();

foreach($brand as $key)
{
	echo $key['brand_id'].'<br/>';
	echo $key['brand_name'].'<br/><br/><br/>';
}

//var_dump($brand);

foreach($offers as $key)
{
	echo $key['product_id'].'<br/>';
	echo $key['product_name'].'<br/><br/><br/>';
}

//var_dump($brand);



?>