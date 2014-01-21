 
 				
				<div class="pagn pagnTop">

<div class="pagnFirstRow">
	
	
	<div class="pagnLinkNavigate">
		<div class="pagnNumList" style="padding-top:-60px !important;">
        
        
 <?php
	if(isset($_SESSION['cart_add_success']))
	{
	?>
    
		<p id="addedmsg"><?php echo $_SESSION['cart_add_success']; ?></p>
    <?php
	unset($_SESSION['cart_add_success']);
	}
	?>
        
        
			
				<?php  
				
				

include('connection.php');

 // how many records should be displayed on a page?
        $records_per_page =12;

        // include the pagination class
        require 'include/Zebra_Pagination.php';

        // instantiate the pagination object
        $pagination = new Zebra_Pagination();
		
		 // set position of the next/previous page links
        $pagination->navigation_position(isset($_GET['navigation_position']) && in_array($_GET['navigation_position'], array('left', 'right')) ? $_GET['navigation_position'] : 'outside');


if(isset($_REQUEST['brand']) && $_REQUEST['brand']=='by_brand')
{

   $MySQL = "
								SELECT
									SQL_CALC_FOUND_ROWS
									*
								FROM
									product
								WHERE
							    	category_id LIKE '%$category_id%'
    							AND
									sub_category_id LIKE '%$sub_category_id%' 
								AND
									type_id LIKE '%$type_id%' 
								AND
									brand_id = '$brand_id'	
				ORDER BY
									product_id DESC
								LIMIT
									" . (($pagination->get_page() - 1) * $records_per_page) . ", " . $records_per_page . "
							";
							
}

else

{

   $MySQL = "
    							SELECT
									SQL_CALC_FOUND_ROWS
									*
								FROM
									product
								WHERE
							    	category_id LIKE '%$category_id%'
    							AND
									sub_category_id LIKE '%$sub_category_id%' 
								AND
									type_id LIKE '%$type_id%' 
								AND
									brand_id LIKE '%$brand_id%'	
				ORDER BY
									product_id DESC
								LIMIT
									" . (($pagination->get_page() - 1) * $records_per_page) . ", " . $records_per_page . "
							";
							
}


							
							
							 // if query could not be executed
					if (!($result = @mysql_query($MySQL)))
			
						// stop execution and display error message
						die(mysql_error());
			
					// fetch the total number of records in the table
					$rows = mysql_fetch_assoc(mysql_query('SELECT FOUND_ROWS() AS rows'));
			
					// pass the total number of records to the pagination class
					$pagination->records($rows['rows']);
			
					// records per page
					$pagination->records_per_page($records_per_page);
						
				
				          
// render the pagination links
$pagination->render();
?> 
				
				
			
		</div>
		
		
			
			
		
	</div>
</div>

<!-- 1 -->


<!--
	windowstartpage - 1
	windowendpage   - 4
--></div>
				
				</div>
				</div>
 
 
 
 
 
 				<ul class="products clearfix">
				  <style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>
				  <style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
                  </style>
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
	

	
</style>                


<link rel="stylesheet" href="css/zebra_pagination.css" type="text/css" media="screen">


<?php
	
?>
	



<?php

while($product_data = mysql_fetch_assoc($result))
{

$product_id = $product_data['product_id'];
$product_name = $product_data['product_name'].' ('.$product_data['size'].')';
$price = $product_data['sale_price'];
$old_price = $product_data['sale_price'];
$picture = 'control_panel/'.$product_data['picture_url'];


$rating_sql= mysql_query("SELECT SUM(rating) AS total_rating FROM reviews WHERE product_id='$product_id'");
$rating_data = mysql_fetch_array($rating_sql);
$total_rating= $rating_data['total_rating'];

$total_rating_sql= mysql_query("SELECT COUNT(rating) AS no_rating FROM reviews WHERE product_id='$product_id'");
$total_data = mysql_fetch_array($total_rating_sql);
$no_of_rating = $total_data['no_rating']; 



$rating = $total_rating / $no_of_rating ; 
$rating_point = $rating ;

$rating_point = round($rating_point,1);

$rating = $rating * 100 ; 
$rating = $rating / 5 ;


$discount_aailable = $product_data['discount_available'];
$discount = $product_data['discount'];

$price = $price - $discount ; 

$earn_point = $product_data['earn_point'];

?>



<li class="details details p219909">
	<form  action="cart.php" method="get" >
    
    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
    <input type="hidden" name="command" value="add">
    
	<div class="csummer-accessories cgosh caccs-makeup cmakeup-accs cbs-gosh-brushes">
        <div class="image" style="position:relative;"><a href="view_product.php?product_id=<?php echo $product_id; ?>"><img src="<?php echo $picture ; ?>" name=medium alt="GOSH Kabuki Brush"></a>
        

  
        </div>
   <div class="detailswrap">
        <h2><a href="view_product.php?product_id=<?php echo $product_id; ?>" title="<?php echo $product_name ?>"><?php echo $product_name ?></a></h2>
		
		<!-- Power Reviews -->
                
                <div class="reviewstar" id="prs-219909"> <!-- power reviews snippet for product reviews -->
                
                <div style="padding:0px 0px 10px 0px ;  display:inline; background-color:#0F0;">
            <table>
            <tr>
            <td>
              <span class="star_span">
                <span style="display: block; width: <?php echo $rating; ?>%; height: 13px; background: url(images/star-rating-sprite.png) 0 -13px;"></span>
           	  </span>  
              </td>
              <td>
               <div class="star_number"><span><?php echo $rating_point; ?></span></div>  
               </td>
               </tr>
               </table>
               </div>                             
                                
                    </div>
                <!-- end Power Reviews -->

			
        
        <div class="price clearfix"><div class="now"><span class="pricename">now</span> <span class="priceno">BDT <?php echo $price; ?></span></div>
        
        
        <?php
		if($discount_available=='yes')
		{
		
		?>
        
        <div class="save"><span class="savename">save</span> <span class="saveprice">BDT <?php echo $discount;  ?></span></div><div class="was"><span class="wasname">was</span> <span class="wasprice">BDT <?php echo $old_price; ?></span></div>
        
        
            <div class="unitofmeasure">&#163;<?php echo $price; ?> each</div></div>
		<?php
		}
		?>
      
	  <div class="promotions">
	     <div class="earnpointprice">
		 <div class="earnpoint hide">Earn  <span id="earnpoint-219909"><?php echo $earn_point ; ?></span> Point</div>
		 </div>
         
        <div class="promotext"></div>

        

	  </div>
    
            
            
        
            <div class="baskettools clearfix">
                <div class="qty"><label for="qty219909">Qty:</label><input name="qty" id="qty219909" type="text" value="1" size="2" maxlength="2"></div>
                <div class="addtobasket"><input type="image" type="submit" src="images/add_to_cart.gif" /></div>
                
                
                <!--<div class="addtobasket"><img src=""<a href=""   title="Add <?php echo $product_name; ?> to basket">Add to basket</a></div>-->
                
                
                
            </div>
        
        
        
		
        
        </div>
        

        </div>
	</form>
				
    </li>
    
 <?php
}



?>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>
<style>
	.promotext, .earnpoint {
		margin-bottom:3px!important;
	}
</style>                
                </ul>
                


			<div class="pagn pagnBtm">

<div class="pagnFirstRow">
	<div class="pagnLinkNavigate">
		<div class="pagnNumList">
			
            
<?php            
// render the pagination links
$pagination->render();
?> 
 	
		</div>
		
	</div>
</div>

<!-- 1 -->


<!--
	windowstartpage - 1
	windowendpage   - 4
--></div>                