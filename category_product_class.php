<?php
class categoryProduct{
	
	private $sub_category_id;
	private $type_id;
	private $brand_id;
	private $category_id;
	private $sub_category_name;
	private $name ; 
	private $brand ;
	private $type ; 
	
	
	
	
	public function __construct($sub_cat,$type_id,$brand_id){
		
		$this->sub_category_id = $sub_cat ; 
		$this->type_id = $type_id;
		$this->brand_id = $brand_id ; 
        $cc = self::getName();
    	$this->category_id = $cc['category_id'];
		
		include('connection.php');
		
		
	}// END OF CONSTRUCT
	
	
	public function getName(){
		
		$sub_cat_sql = mysql_query("SELECT * FROM sub_category WHERE sub_category_id='$this->sub_category_id'");
		while($sub_cat_data = mysql_fetch_array($sub_cat_sql)){
			$this->name['sub_category_name'] = $sub_cat_data['sub_category_name'];	
			$this->name['sub_category_id']= $sub_cat_data['sub_category_id'];
			$this->category_id = $sub_cat_data['category_id'];	
		}
		
		
		
		$cat_name_sql = mysql_query("SELECT * FROM category WHERE category_id='$this->category_id'");
		while($category_data = mysql_fetch_array($cat_name_sql)){
			$this->name['category_name'] = $category_data['category_name'];	
			$this->name['category_id'] = $category_data['category_id'];	
		}
		//return 'paise';
		return $this->name ; 
		
	} // End of gateName
	
	
	
	public function getBrands(){
		
		$i ; 
		
		$brand_sql=mysql_query("SELECT * FROM product WHERE sub_category_id='$this->sub_category_id' GROUP BY brand_id ");
		while($brand_data= mysql_fetch_array($brand_sql))
		{
			$brand_id = $brand_data['brand_id'];
		
		   $brand_name_sql = mysql_query("SELECT * FROM brand WHERE brand_id= '$brand_id'");
			while($brand_name_data=mysql_fetch_array($brand_name_sql))
			{
				$this->brand[$i]['brand_name'] = $brand_name_data['brand_name'];
				$this->brand[$i]['brand_id'] = $brand_name_data['brand_id'];
				$this->brand[$i]['product'] = $this->productCounter($brand_id);
			}
			
			$i++;
		}
		
		 return $this->brand ;
		
		
	}// End of getBrand
    
    public function getBrandName($brand_id){
    	$brand_sql = mysql_query("SELECT brand_name FROM brand WHERE brand_id='$brand_id'");
		while($brand_data = mysql_fetch_array($brand_sql)){
			$brand_name = $brand_data[0];
		}
		return $brand_name ; 
	} // End of gateBrandName
	
	private function productCounter($b_id){
		
		$counter_sql = mysql_query("SELECT COUNT(*) AS total FROM product WHERE brand_id='$b_id' AND sub_category_id='$this->sub_category_id' AND type_id LIKE '%$this->type_id%' AND brand_id LIKE '%$this->brand_id%'");
		$data = mysql_fetch_assoc($counter_sql);
		$total = $data['total'];
		return $total ; 
		
		
	}// End of productCounter
	
	public function getTotal(){
		
		
		$total_sql= mysql_query("SELECT COUNT(*) AS total FROM product WHERE 
                 category_id LIKE '%$this->category_id%'
                    AND  
                 sub_category_id LIKE '%$this->sub_category_id%' 
                    AND 
                    type_id LIKE '%$this->type_id%' 
                      AND 
                brand_id LIKE '%$this->brand_id%'
        
        
        ");
		$total_data = mysql_fetch_array($total_sql);
		return $total_data['total'];
		
		
	} // END OF getTotal
	
	
	
	public function getProductType(){
		
		$i ; 
		
		
		   $type_name_sql = mysql_query("SELECT * FROM product_type WHERE sub_category_id ='$this->sub_category_id'");
			while($type_name_data=mysql_fetch_array($type_name_sql))
			{
				$this->type[$i]['type_name'] = $type_name_data['type_name'];
				$this->type[$i]['type_id'] = $type_name_data['type_id'];
				$this->type[$i]['product'] = $this->typeProductCounter($this->type[$i]['type_id']);
				
				$i++;
				
			}
			
			
		
		 return $this->type ;
		
		
	}// End of getProductType
	
	
	private function typeProductCounter($type_id){
		
		$counter_sql = mysql_query("SELECT COUNT(*) AS total FROM product WHERE type_id='$type_id'");
		$data = mysql_fetch_assoc($counter_sql);
		$total = $data['total'];
		return $total ; 
		
		
	}// End of typeProductCounter
	
	
	
} // END OF  CLASS

?>