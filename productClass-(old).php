<?php

class Product{

private $product_id;
private $product_info ; 
private $category_id;
private $sub_category_id;


public function __construct($product_id){
	$this->product_id = $product_id ; 
	include('connection.php');
	session_start();
	
} // End of Construct 


public  function getProductInfo($product_id){

	$product_sql= mysql_query("SELECT * FROM product WHERE product_id='$product_id'");
	while($product_data = mysql_fetch_array($product_sql)){
		$this->product_info['product_id'] = $product_data['product_id'];
		$this->product_info['product_name'] = $product_data['product_name'];
		$this->product_info['category_id'] = $product_data['category_id'];
		$this->product_info['sub_category_id'] = $product_data['sub_category_id'];
		$this->product_info['type_id'] = $product_data['type_id'];
		$this->product_info['details'] = $product_data['details'];
		$this->product_info['terms'] = $product_data['terms'];
		$this->product_info['size'] = $product_data['size'];
		$this->product_info['color'] = $product_data['color'];
		$this->product_info['discount'] = $product_data['discount'];
		$this->product_info['discount_available'] = $product_data['discount_available'];
		$this->product_info['discount_duration'] = $product_data['discount_duration'];
		$this->product_info['discount_date'] = $product_data['discount_date'];
		$this->product_info['purchase_price_1'] = $product_data['purchase_price_1'];
		$this->product_info['sale_price'] = $product_data['sale_price'];
		$this->product_info['quantity_1'] = $product_data['quantity_1'];
		$this->product_info['purchase_price_2'] = $product_data['purchase_price_2'];
		$this->product_info['quantity_2'] = $product_data['quantity_2'];
		$this->product_info['buy_point'] = $product_data['buy_point'];
		$this->product_info['earn_point'] = $product_data['earn_point'];
		$this->product_info['brand_id'] = $product_data['brand_id'];
		$this->product_info['picture_url'] = 'control_panel/'.$product_data['picture_url'];
		$this->product_info['total_rating'] = $product_data['total_rating'];
		$this->product_info['no_of_rating'] = $product_data['no_of_rating'];
		
		$this->category_id = $product_data['category_id'];
		$this->product_info['category_name'] = $this->getCategory();
		$this->sub_category_id = $product_data['sub_category_id'];
		$this->product_info['sub_category_name'] = $this->getSubCategory();
		
		$this->product_info['discount_price'] = $this->getDiscountPrice($this->product_info['sale_price'],$this->product_info['discount']);
	}
	
	return $this->product_info ; 
	
	
} // End of gretProductInfo

private function getCategory(){
	$category_sql= mysql_query("SELECT * FROM category WHERE category_id='$this->category_id'");
	while($category_data=mysql_fetch_array($category_sql)){
		$category_name = $category_data['category_name'];	
	}
	return $category_name;
	
} // End of get Category 


private function getSubCategory(){
	$sub_category_sql= mysql_query("SELECT * FROM sub_category WHERE sub_category_id='$this->sub_category_id'");
	while($sub_category_data=mysql_fetch_array($sub_category_sql)){
		$sub_category_name = $sub_category_data['sub_category_name'];	
	}
	return $sub_category_name;
	
} // End of get Category 

 public function getSubCategoryAll(){
		  
		  $i = 0 ;
		  
		  $subcat_query=mysql_query("SELECT * FROM sub_category WHERE category_id='$this->category_id'");
		  while($subcat_data=mysql_fetch_array($subcat_query))
		  {
			  $this->sub_category[$i]['sub_category_id']= $subcat_data['sub_category_id'];
			  $this->sub_category[$i]['sub_category_name']= $subcat_data['sub_category_name'];
			  $this->sub_category[$i]['picture']= 'control_panel/'.$subcat_data['pic_url'];
			  
			  $i++;
		  }
		  
		  return $this->sub_category;
		  
	  }// END OF getSubCategory	
	  
 public function getDiscountPrice($regular_prize,$discount){
	 $discount_price = $regular_prize - $discount ; 
	 return $discount_price ;
	 
 }// End of getDiscountPrice
 
 
 
 public function alsoLikeProduct(){
	 $also_like_sql = mysql_query("SELECT * FROM product WHERE sub_category_id='$this->sub_category_id' AND product_id != '$this->product_id' LIMIT 6 ");
	 $i=0;
	 while($also_like_data = mysql_fetch_array($also_like_sql))
	 {
		$also_like_product[$i] = $this->getProductInfo($also_like_data['product_id']);
		$i++; 
	 }
	 
	 return $also_like_product;
	 
 }

	 
}// End of Class

 


?>