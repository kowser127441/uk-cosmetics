  <?php
  
  class Category{
	  
	  private $category_id;
	  private $data ;
	  private $slider_image ; 
	  private $brands ;
	  private $offers ; 
	  private $sub_category ; 
	  private $product ;
	  
	  public function __construct($category){
		  
		  $this->category_id = $category ; 
		  
		  include('connection.php');
		  
	  } // END OF CONSTRUCT
	  
	  public function getCatName(){
		  
		  $name_query= mysql_query("SELECT category_name FROM category WHERE category_id='$this->category_id'");
		  while($name_data=mysql_fetch_array($name_query))
		  {
			  $this->data=$name_data['category_name'];	
		  }
		  
		  return $this->data ; 
		  
		  
	  }// END OF GET NAME
	  
	  
	  public function getSliderImage(){
		  
			$index = 0 ;
			
			$slider_query=mysql_query("SELECT * FROM category_slider_image WHERE category_id='$this->category_id'");
			while($slider_data=mysql_fetch_array($slider_query))
			{
				$this->slider_image[$index]['image'] = 'control_panel/'.$slider_data['pic_url'];
				
				$index++;
				
			}
			
			return $this->slider_image;
			
			
	  } // END OF getSliderImage
	  
	  public function getBrands(){
		  
		  $i = 0 ;
		  
		  $brand_query=mysql_query("SELECT brand_id FROM product WHERE category_id='$this->category_id' GROUP BY brand_id");
		  while($brand_data=mysql_fetch_array($brand_query))
		  {
			  $brand_id=$brand_data['brand_id'];
			  $brand_info_sql=mysql_query("SELECT brand_name FROM brand WHERE brand_id='$brand_id'");
			  while($brand_info=mysql_fetch_array($brand_info_sql))
			  {
				  
				  $this->brands[$i]['brand_id']= $brand_id;
				  $this->brands[$i]['brand_name']= $brand_info['brand_name'];
				  
			  }
			  $i++;
		  }
		  
		  return $this->brands;
		  
	  }// END OF getBrands	
	  
	  
	  public function getTopOffers(){
		  
		  $i = 0 ;
		  
		  $offer_query=mysql_query("SELECT * FROM product WHERE category_id='$this->category_id' AND discount_available='yes' ORDER BY product_id DESC LIMIT 2");
		  while($offer_data=mysql_fetch_array($offer_query))
		  {
			  $this->offers[$i]['product_id']=$offer_data['product_id'];
			  $this->offers[$i]['product_name']=$offer_data['product_name'];
			  $price = $offer_data['sale_price'] - $offer_data['discount']; 
			  $this->offers[$i]['discount']=$price;
			  $this->offers[$i]['picture']= 'control_panel/'.$offer_data['picture_url'];
			  
			  $i++;
		  }
		  
		  return $this->offers;
		  
		  
		  
	  }// END OF getTopOffres
	  
	  
	  
	  public function getSubCategory(){
		  
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
	  
	  
	   public function getProducts(){
		  
		  $i = 0 ;
		  
		  $product_query=mysql_query("SELECT * FROM product WHERE category_id='$this->category_id' LIMIT 4");
		  while($product_data=mysql_fetch_array($product_query))
		  {
			  $this->product[$i]['product_id']= $product_data['product_id'];
			  $this->product[$i]['product_name']= $product_data['product_name'];
			  $this->product[$i]['price']= $product_data['sale_price'];
			  $this->product[$i]['earn_point']= $product_data['product_name'];
			  $this->product[$i]['picture']= 'control_panel/'.$product_data['picture_url'];
			  
			  $i++;
		  }
		  
		  return $this->product;
		  
	  }// END OF getProducts
	  
	 
	
	  
  } // END OF CLASS 
  
  
  ?>