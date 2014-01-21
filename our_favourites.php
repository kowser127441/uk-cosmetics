<div id="ourfavourites" class="clearfix btokt">
    <h2 class="title">Our Favourites </h2>
    
<ul class="products clearfix">

<?php

include('connection.php');

$fav_query= mysql_query("SELECT * FROM favourites ORDER BY position LIMIT 6");
while($fav_data=mysql_fetch_array($fav_query))
{
	
	$fav_product_id = $fav_data['product_id'];
	
	$pro_query= mysql_query("SELECT * FROM product WHERE product_id='$fav_product_id'");
	while($fav_pro_data=mysql_fetch_array($pro_query))
	{
		
		$fav_pic_url = 'control_panel/'.$fav_pro_data['picture_url'];
		$fav_product_name = $fav_pro_data['product_name'];
		$fav_sale_price = $fav_pro_data['sale_price'];
		$fav_earn_point = $fav_pro_data['earn_point'];
        
        


?>
    
        <li class="details">
        <div class="image">
            
                <a href="view_product.php?product_id=<?php echo $fav_product_id; ?>" title="<?php echo $fav_product_name ?>"><img src="<?php echo $fav_pic_url ?>" border=0 name=medium alt="<?php echo $fav_product_name ?>"></a>
            
        </div>
        <div class="detailswrap">
        	<h2><a href="view_product.php?product_id=<?php echo $fav_product_id; ?>" title="<?php echo $fav_product_name ?>"><?php echo $fav_product_name ?></a></h2>
        	
        		<div class="price">
        			<div class="now" ><span class="pricename">now</span> <span class="priceno" >BDT <?php echo $fav_sale_price ?></span></div>
        			                
        			    
        		</div>
                <div class="clear"></div>
        	
        	<div class="earnpoint hide">Earn  <span id="earnpoint-572550"><?php echo $fav_earn_point ; ?></span> Point</div>
        	
        	
        	
        	
        <div class="clear"></div>
        
        
        </div>
        </li>
    

<?php
	}
}
?>

</ul>
</div>