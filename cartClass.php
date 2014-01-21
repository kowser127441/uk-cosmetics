<?php

class ShopingCart{

	
	
	public static function getCartProductNo(){
            error_reporting(0);
		//session_start();
		if(is_array($_SESSION['cart'])){
			$max=count($_SESSION['cart']);
		}
		else{
			$max = 0 ;
		}
		
		return $max ; 
		
	} // end of getCartProductNo
	
	
	public static function getCartAmount(){
		
		//include('productClass.php');
		
		
		$total_sale_price = 0;
		$total_discount_price = 0;
		
		if(is_array($_SESSION['cart'])){
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];
					
				//	$details=new Product($pid);
				//	$product_details= $details->getProductInfo($pid);
					
					if($q==0) continue;
					$total_amount = $total_amount +  self::getProductPrice($pid)*$q;
					
						
				}
			?>
            
            
            
            <?php
            }
			
		
		return $total_amount;
		
	}// End of getCArt
	
	public function getProductPrice($product_id){
		
		include('connection.php');
		$price = 0;
		
		$price_sql = mysql_query("SELECT sale_price , discount FROM product WHERE product_id='$product_id'");
		while($product_data = mysql_fetch_array($price_sql)){
			
			$price = $product_data['sale_price'] - $product_data['discount'];
			
		}
		
		return $price;
		
	} // End of getProductPrice
	
	
	public static function productInfo($id){
		
		$product_info ;
		
		$query = mysql_query("SELECT * FROM product WHERE product_id = '$id'");
		while($data = mysql_fetch_array($query))
		{
			$product_info['product_name'] = $data['product_name'];	
			$product_info['image'] = 'control_panel/'.$data['picture_url'];	
			$product_info['price'] = self::getProductPrice($id);
			
			
		}
		
		return $product_info ; 
		
	} // End of productInfo()
	
	
	
}// End of Class

?>