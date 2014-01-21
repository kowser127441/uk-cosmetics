<?php
class SubMenu{
	private $category_id ;
	
	private $sub_category ; 
	
	private $brand ; 
	
	private $offers ; 
	
	public function __construct($cat_id){
		
		$this->category_id = $cat_id ; 
		
		include('connection.php');
		
	} // End of construct
	
	public function getSubcategory(){
	
	$index = 0 ;
	
	$sub_cat_sql=mysql_query("SELECT * FROM sub_category WHERE category_id='$this->category_id'");
	while($sub_cat_data= mysql_fetch_array($sub_cat_sql))
	{
		$sub_category_id = $sub_cat_data['sub_category_id'];
		$sub_category_name = $sub_cat_data['sub_category_name'];
		
		
		$this->sub_category[$index]['sub_category_id']= $sub_category_id ; 
		$this->sub_category[$index]['sub_category_name']= $sub_category_name ; 
	
		$index++;
		
	}
	
	return	$this->sub_category;
		
		
	} // End of get sub category
	
	
	
public function getBrand(){
	
	$index = 0 ;
	
	$brand_sql=mysql_query("SELECT * FROM product WHERE category_id='$this->category_id' GROUP BY brand_id");
	while($brand_data= mysql_fetch_array($brand_sql))
	{
		$brand_id = $brand_data['brand_id'];
		
		$brand_info_sql=mysql_query("SELECT * FROM brand WHERE brand_id='$brand_id'");
		while($brand_info_data=mysql_fetch_array($brand_info_sql))
		{
			$brand_name = $brand_info_data['brand_name'];
		
		$this->brand[$index]['brand_id']= $brand_id ; 
		$this->brand[$index]['brand_name']= $brand_name ; 
	
		
		}
		$index++;
	}
	
	return	$this->brand;
		
		
	} // End of get Brands
	
	
public function offers(){
	
	$index = 0 ;
	
	$offers_sql=mysql_query("SELECT * FROM product WHERE discount_available='yes' AND category_id='$this->category_id'");
	while($offers_data= mysql_fetch_array($offers_sql))
	{
		$product_id = $offers_data['product_id'];
		$product_name = $offers_data['product_name'];
		
		
		$this->offers[$index]['product_id']= $product_id ; 
		$this->offers[$index]['product_name']= $product_name ; 
	
		$index++;
		
	}
	
	return	$this->offers;
		
		
	} // End of get sub category
	
	
	
	
}// End of class




?>