<?php

class Product{

private $product_id;
private $product_info ; 
private $category_id;
private $sub_category_id;
private $review;


public function __construct($product_id){
	$this->product_id = $product_id ; 
	include('connection.php');
	session_start();
	
} // End of Construct 


public  function getProductInfo($product_id){

	$product_sql= mysql_query("SELECT * FROM product WHERE product_id='$product_id'");
	while($product_data = mysql_fetch_array($product_sql)){
		$this->product_info['product_id'] = $product_data['product_id'];
		$this->product_info['product_name'] = $product_data['product_name'].' ('.$product_data['size'].')';
		$this->product_info['category_id'] = $product_data['category_id'];
		$this->product_info['sub_category_id'] = $product_data['sub_category_id'];
		$this->product_info['type_id'] = $product_data['type_id'];
        $this->product_info['product_code'] = $product_data['product_code'];
		$this->product_info['details'] = $product_data['details'];
		$this->product_info['terms'] = self::getTermsCondition();
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
        $this->product_info['brand_name'] = self::getBrandName($product_data['brand_id']);
		$this->product_info['picture_url'] = 'control_panel/'.$product_data['picture_url'];
		
		$this->product_info['total_rating'] = $this->totalRating($product_id); //$product_data['total_rating'];
		$this->product_info['no_of_rating'] = $this->total_no_rating($product_id); //$product_data['no_of_rating'];
		
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


private function getTermsCondition(){
    $terms_sql= mysql_query("SELECT * FROM terms_of_conditions LIMIT 1");
	while($terms_data=mysql_fetch_array($terms_sql)){
		$terms = $terms_data[0];	
	}
	return $terms;
	
} // End of getTermsCondition



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
	 $discount = $discount / 100;
	 
	 $discount_per = $discount * $regular_prize;

	 $discount_price = $regular_prize - $discount_per ; 
	 return $discount_price ;
	 
 }// End of getDiscountPrice
 
 
 
 public function alsoLikeProduct(){
	 $also_like_sql = mysql_query("SELECT * FROM product WHERE sub_category_id='$this->sub_category_id' AND product_id != '$this->product_id' LIMIT 8 ");
	 $i=0;
	 while($also_like_data = mysql_fetch_array($also_like_sql))
	 {
		$also_like_product[$i] = $this->getProductInfo($also_like_data['product_id']);
		$i++; 
	 }
	 
	 return $also_like_product;
	 
 }
 
 public function totalRating($product_id){
	 
		$rating_sql= mysql_query("SELECT SUM(rating) AS total_rating FROM reviews WHERE product_id='$product_id'");
		$rating_data = mysql_fetch_array($rating_sql);
		$total= $rating_data['total_rating'];
		return $total ; 
 } // End of totalRating
 
 public function total_no_rating($product_id){
	 
	 $total_rating_sql= mysql_query("SELECT COUNT(rating) AS no_rating FROM reviews WHERE product_id='$product_id'");
	 $total_data = mysql_fetch_array($total_rating_sql);
	 $total_data = $total_data['no_rating'];
	 
	 return $total_data ;  
	 
 } // End of total number of taing
 
 
 public function review($product_id){
	 
	 $j = 0 ; 
	 
	 $review_sql= mysql_query("SELECT * FROM reviews WHERE product_id='$product_id'");
	 while($review_data = mysql_fetch_array($review_sql))
	 {
		
		$this->review[$j]['headline']= $review_data['headline'];
		$this->review[$j]['rating']= $review_data['rating'];
		$this->review[$j]['comments']= $review_data['comments'];
		$this->review[$j]['nickname']= $review_data['nickname'];
		$this->review[$j]['location']= $review_data['location'];
		$this->review[$j]['date']= $review_data['date'];
		
		$j++ ; 
	 }
	 
	 return $this->review ; 
	 
 } // End of review
 
 
   public function getBrandName($brand_id){
     
	 $brand_sql= mysql_query("SELECT brand_name FROM brand WHERE brand_id='$brand_id'");
	 while($brand_data = mysql_fetch_array($brand_sql))
	 {
		$brand_name= $brand_data['brand_name'];
	 }
	 
	 return $brand_name ; 
	 
 } // End of getBrandName
 
 

	 
}// End of Class

 


?>