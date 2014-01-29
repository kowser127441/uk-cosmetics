<div id="coltwo"><style>
	body#health h1 {color:#222!important;}
</style>

<script type="text/javascript">
<!-- power reviews implementation -->
var pr_locale = 'en_GB';
var pr_merchant_group_id = 15482;
var pr_site_id = 1;
var pr_zip_location = 'http://www.superdrug.com/partners/';
var pr_style_sheet="http://www.superdrug.com/content/ebiz/superdrug/resources/css/powerreviews.css";
var pr_page_id = '219909';
var pr_write_review='http://www.superdrug.com/accessories/gosh-kabuki-brush/invt/219909&temp=submitpowerreview&pageId=219909&layout=defaultnocolthree';
var pr_read_review="#";
</script>


<div id="productdetail" class="p219909 summer-accessories cgosh caccs-makeup cmakeup-accs cbs-gosh-brushes c2013e10_gosh c c c c                 ">

     <?php
    if(isset($_SESSION['status']))
	{
	?>
		<p id="addedmsg"><?php echo  $_SESSION['status']; ?></p>
	<?php
    unset($_SESSION['status']);
	}
	?>

  
    <?php
	if(isset($_SESSION['cart_add_success']))
	{
	?>
    
    <script>
$( document ).ready(function() {
	
	$('showminicart').addClass('viewbasketactive');
	/*
	document.getElementById('showminicart').addClass += 'viewbasketactive';
	$('#showminicart').addClass('viewbasketactive');
	$('#minicart_totals').append('<li class="minicart-promo">(Before Discount)</li>');
	Venda.Ebiz.runEqualHeight();
	*/
});
</script>
	
    
    
		<p id="addedmsg"><?php echo $_SESSION['cart_add_success']; ?></p>
    <?php
	unset($_SESSION['cart_add_success']);
	}
	?>
	
	<div class="backlink"><a href="javascript:history.back();" title="Back">Back</a></div>    
	<h1 style="margin-bottom:0 !important;"><?php echo $product_info['product_name']; ?></h1>	
    
     <p style="color:#C0C; font-weight:bolder; display:inline;">Brand -  <span style="color:#000;"><?php echo $product_info['brand_name']; ?></span></p>
      <p style="margin-left:20px; color:#F0C; font-weight:bolder; display:inline;">Product Code - <span style="color:#000;"><?php echo $product_info['product_code']; ?></span></p>
      
       <br/><br/>
	    
	<div class="invtmedia">


<!---------------------------------------------------->  
  
  
  <style>

#imgbox 
{
    vertical-align : middle;
    position : absolute;
    border: 1px solid #999;
    background : #FFFFFF; 
    filter: Alpha(Opacity=100);
    visibility : hidden;
    /*height : 600px; */
    width : 600px;
    z-index : 50;
    overflow : hidden;
    text-align : center;
}

</style>


<script type="text/javascript">

function getElementLeft(elm) 
{
    var x = 0;

    //set x to elm’s offsetLeft
    x = elm.offsetLeft;

    //set elm to its offsetParent
    elm = elm.offsetParent;

    //use while loop to check if elm is null
    // if not then add current elm’s offsetLeft to x
    //offsetTop to y and set elm to its offsetParent

    while(elm != null)
    {
        x = parseInt(x) + parseInt(elm.offsetLeft);
        elm = elm.offsetParent;
    }
    return x;
}

function getElementTop(elm) 
{
    var y = 0;

    //set x to elm’s offsetLeft
    y = elm.offsetTop;

    //set elm to its offsetParent
    elm = elm.offsetParent;

    //use while loop to check if elm is null
    // if not then add current elm’s offsetLeft to x
    //offsetTop to y and set elm to its offsetParent

    while(elm != null)
    {
        y = parseInt(y) + parseInt(elm.offsetTop);
        elm = elm.offsetParent;
    }

    return y;
}




function Large(obj)
{
	
    var imgbox=document.getElementById("imgbox");
    imgbox.style.visibility='visible';
    var img = document.createElement("img");
    img.src=obj.src;
    img.style.width='600px';
  //  img.style.height='600px';
    
    if(img.addEventListener){
        img.addEventListener('mouseout',Out,false);
    } else {
        img.attachEvent('onmouseout',Out);
    }             
    imgbox.innerHTML='';
    imgbox.appendChild(img);
    imgbox.style.left=(getElementLeft(obj)-600) +'px';
    imgbox.style.top=(getElementTop(obj)-250) + 'px';
}


function Out()
{
    document.getElementById("imgbox").style.visibility='hidden';
}



</script>
  
  
  
  <div id="imgbox"></div>

		
    <img  id='img1' src="<?php echo $product_info['picture_url']; ?>" name=large alt="<?php echo $product_info['product_name']; ?>" style="width:244px; height:244px;" onMouseOver="Large(this)">
    
    
 <!---------------------------------------------------->   
    
        
        <div class="clear"></div>

	</div>
	<div class="desc">
		<div class="desc1">
        	        
        <p><?php echo $product_info['details']; ?></p>
        <div class="ei hide">
        <p>Web product code: 219909</p>
        <p>Product type: makeupbrushes </p>
         <p>Product Brand: GOSH </p>
        </div>
	</div>
      
		
	<div class="promotion" style="float:left;">	
      	<div class="earnpoint hide">Earn  <span id="earnpoint-219909"><?php echo $product_info['earn_point']; ?></span> Point</div>
       
        
		
	</div>
		 <div class="powereviews" style="width:300px; float:right;">
         
         
       
		<!--<script type="text/javascript">snippet(document);</script>-->
        
        
        <div id="pr-snippet-219909-1" class="pr-snippet">
        <div class="pr-snippet-wrapper">
        
        
        
        
        <?php
		
		$total_rating = $product_info['total_rating'];
		$no_of_rating = $product_info['no_of_rating'];
		
		$rating = $total_rating / $no_of_rating ; 
		$rating_point = $rating ;
		
		$rating_point = round($rating_point,1);
		
		$rating = $rating * 100 ; 
		$rating = $rating / 5 ;
		
		
		?>
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
        
        <p class="pr-snippet-review-count"> (<?php echo $product_info['no_of_rating']; ?> reviews) </p>
        <div class="pr-snippet-read-write">
        <div class="pr-snippet-read-reviews">
        <a href="#" data-pr-event="snippet-read-reviews" class="pr-snippet-link" id="pr-snippet-read-link-219909">
        Read <span><?php echo $product_info['no_of_rating']; ?></span> Reviews
        </a>
        </div>
        
        <div class="pr-snippet-write-review" >
        <a href="review.php?product_id=<?php echo $product_id; ?>" data-pr-event="snippet-write-review" class="pr-snippet-link"> Write a Review </a>
        </div>
        
       <!-- <div class="pr-clear"></div>-->
        
        
        
        </div>
        
        
				
		</div>
        </div>
        
 
         
    <!--START 102-->    
        
        <!--START NORNAL NO GIFT 103-->  
        <div class="price">

     <div class="now"><span class="pricename">now</span> <span class="priceno">  <?php echo $product_info['discount_price']; ?></span></div>
            
            <?php 
              if($product_info['discount_available'] =='yes')   
			  {
			?>	 
				        
            <div class="save"><span class="savename">save</span> <span class="saveprice"> BDT<?php echo $product_info['discount'].'%'; ?></span></div>
            <div class="was"><span class="wasname">was</span> <span class="wasprice"> BDT<?php echo $product_info['sale_price']; ?></span></div>    
            <?php
			  }
			?>
            
            
            <div class="unitofmeasure">BDT <?php echo $product_info['discount_price']; ?> each</div>
        </div>  
			
        <div class="detailaddfunction clearfix">

        <form name="addproduct219909form" action="cart.php" method="get" id="addproduct219909form">
            <input type="hidden" name="product_id" value="<?php echo $product_info['product_id']; ?>">
            <input type="hidden" name="command" value="add">

           
            <div class="stockinfo"><div class="qty"><label for="qty">Quantity:</label> <input name="qty" id="qty" type="text" value="1" size="2" maxlength="2"></div></div>                    
            <div class="basketlinks"><input type="image" src="http://www.superdrug.com/content/ebiz/superdrug/resources/images/add-to-basket.gif" id="addproduct219909" alt="Add GOSH Kabuki Brush to Basket"></div>
            <div class="instock">Product In Stock</div>
        </form>
        </div>
        <!--END NORNAL NO GIFT 103--> 
             
        
     <!--END 102-->
     
     
    




    <div id="sociallike" class="clearfix">
        <div class="addthis_toolbox addthis_default_style">
            <a class="addthis_counter addthis_pill_style" style="margin-right:5px;"></a>
            <a class="addthis_button_facebook_like" fb:like:layout="button_count" fb:like:width="46"></a>
            <a class="addthis_button_tweet" tw:count="none"></a>
            <a class="addthis_button_pin_it" style="float:left;"><iframe src="http://pinit-cdn.pinterest.com/pinit.html?url=http://www.superdrug.com/accessories/gosh-kabuki-brush/invt/219909&amp;media=http://www.superdrug.com/content/ebiz/superdrug/invt/219909/219909_m.jpg&amp;description=GOSH Kabuki Brush%20%C2%A38.99%20%23superdrug&amp;layout=none&amp;ref=http://www.superdrug.com/accessories/gosh-kabuki-brush/invt/219909" scrolling="no" frameborder="0" style="border: none; width: 43px; height: 20px; "></iframe><script type="text/javascript">(function() {var pinScriptTag = document.createElement('script'); pinScriptTag.type = 'text/javascript'; pinScriptTag.async = true; pinScriptTag.src = '//assets.pinterest.com/js/pinit.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(pinScriptTag, s);})();</script></a>
            <a class="addthis_button_google_plusone" g:plusone:size="medium" style="width:35px;" g:plusone:annotation="none"></a>
           <!-- <a class="addthis_button_print" title="Print this Product" style="border-left:1px solid #d3d3d3; padding-left:5px;">Print</a>
            <a class="addthis_button_email" title="Email this to a Friend">Email</a>-->
         </div> 
    </div> 
    
</div>
 

	<!-- tabs -->

	<div class="tabs">
        <ul class="tabNavigation clearfix">

    
                
        
        	

            <li id="youmaylike" class="first"><a href="#youmayalsolike" title="You may also like"><span>You may also like</span></a></li>
            <li id="review"><a href="#readReview" title="Customer reviews" class="readReview"><span>Reviews</span></a></li>
            <li id="delivery"><a href="#deliverydetails" title="Delivery Details"><span>Delivery</span></a></li>
        </ul>
<div class="clear"></div>
<div class="panel-container">

    



		 
		<div id="youmayalsolike" class="tabcontent">

			
<ul id="iacc" class="featprods clearfix">



<!--START PRODUCT -->

<?php
$also_like_product = $product->alsoLikeProduct();
//var_dump($also_like_product);
foreach($also_like_product as $also_like)
{ 


?>
    
<li class="details details p219895 cwash-off cgosh cskin-bronzing cbs-gosh-bronzing c2013e10_gosh">
            <div class="image"> 
    
        <a href="view_product.php?product_id=<?php echo $also_like['product_id']; ?>" title="<?php echo $also_like['product_name']; ?>"><img src="<?php echo $also_like['picture_url'] ?>" name=medium alt="<?php echo $also_like['product_name']; ?>"></a>
    
    
</div>
<div class="detailswrap">
    <h2><a href="view_product.php?product_id=<?php echo $also_like['product_id']; ?>"><?php echo $also_like['product_name'] ?></a></h2>
    
    <div class="price clearfix">
        <div class="now"><span class="pricename">now</span> <span class="priceno"> BDT<?php echo $also_like['discount_price'] ?></span></div>
         
            
        <div class="unitofmeasure">&#163;4.63 per 100ml</div>
     </div> 
    

    <div class="earnpoint hide">Earn  <span id="earnpoint-219895"><?php echo $also_like['earn_point'] ?></span> Point</div>  
        
            
            
		
            
            <div class="clear"></div>
                
    
    
        <form name="addproductmini219895form" action="cart.php" method="get" id="addproductmini219895form">
            <input type="hidden" name="product_id" value="<?php echo $product_info['product_id']; ?>">
            <input type="hidden" name="command" value="add">
           
            
        <div class="baskettools clearfix">
            <div class="qty"><label for="qty219895">Qty:</label><input name="qty" id="qty219895" type="text" value="1" size="2" maxlength="2"></div>
            <div class="addtobasket"><input type="image" type="submit" src="images/add_to_cart.gif" /></div>
        </div>
        </form>
     
     
    
    
    
</div>
        </li>
        
<?php
}
?>

<!--END PRODUCT -->        
        


<link rel="stylesheet" href="css/pr_styles_review.css" type="text/css" />        
<link rel="stylesheet" href="css/powerreviews.css" type="text/css" />


</ul>
            <div class="hide">

</div>
	</div>
    
	<div id="readReview" class="tabcontent">
    
  
    




		
		<!-- power review engine function call to read reviews -->
		<div id="readReview"></div><br class="clear-all">
        
		<!--<script type="text/javascript">engine(document);</script>-->
        
        <!--START SHOW REVIEW-->
        
        
        <div id="pr-review-engine" class="pr-review-engine">
<div id="pr-header-219909" class="pr-header">
<div class="pr-snapshot">
<div class="pr-review-social-bar pr-fb-needs-merchant" style="">
<div class="pr-clear"></div>
</div>
<a name="ReviewHeader"></a>
<div class="pr-snapshot-head">
<div class="pr-snapshot-head-wrapper pr-float-left">
<p class="pr-snapshot-title">REVIEW SUMMARY</p>
<a class="pr-snapshot-cobrand" onclick="POWERREVIEWS.common.showSmallPopup('http://www.abhworld.com/', 600, 1100); return false;" data-pr-event="snapshot-cobrand-link-pre" href="#">powered by ABH world</a>
</div>
<div class="pr-clear"></div>
</div>
<div class="pr-snapshot-body">
<div class="pr-snapshot-body-wrapper">
<div class="pr-snapshot-rating-wrapper">
<div class="pr-snapshot-rating">

<!--<div class="pr-stars pr-stars-3" style="background-position: 0px -138px;">&nbsp;</div>-->
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

<p class="pr-snapshot-average-based-on-text">(based on <?php echo $product_info['no_of_rating']; ?> reviews)</p>
<div id="pr-snapshot-histogram">

<!--
<a id="pr-snapshot-histogram-lnk" onmouseout="POWERREVIEWS.common.togglePopOut({'link':'pr-snapshot-histogram-lnk','target':'pr-snapshot-histogram-container'},'hide', this, event)" onmouseover="POWERREVIEWS.common.togglePopOut({'target':'pr-snapshot-histogram-container'},'show', this, event)" onclick="return false" href="#" data-pr-event="snapshot-histogram-link">
<img id="pr-snapshot-histogram-lnk-img" onmouseout="POWERREVIEWS.common.togglePopOut({'link':'pr-snapshot-histogram-lnk-img','target':'pr-snapshot-histogram-container'},'hide', this, event)" onmouseover="POWERREVIEWS.common.togglePopOut({'target':'pr-snapshot-histogram-container'},'show', this, event)" onclick="return false" src="http://www.superdrug.com/partners/pwr/engine/images/icon_popout.gif">
</a>

-->
<div id="pr-snapshot-histogram-wrapper">


<div id="pr-snapshot-histogram-container" class="pr-closed" onmouseout="POWERREVIEWS.common.togglePopOut({'link':'pr-snapshot-histogram-lnk','target':'pr-snapshot-histogram-container'},'hide', this, event)" onmouseover="POWERREVIEWS.common.togglePopOut({'target':'pr-snapshot-histogram-container'},'show', this, event)">
<p id="pr-snapshot-histogram-header">
<span>Ratings Distribution</span>
</p>







</div>
</div>
</div>
</div>
<div class="pr-clear"></div>
</div>
<div id="pr-snapshot-footer-219909" class="pr-snapshot-footer" style="">
<a id="write-review-219909" class="pr-write-review-link" data-pr-event="snapshot-write-review" href="review.php?product_id=<?php echo $product_id; ?>">
<div class="pr-snapshot-write-review">
<span>Write a Review</span>
</div>
</a>
<div class="pr-clear"></div>
</div>
</div>
</div>
</div>
<div class="pr-review-sort">
<div class="pr-review-sort-wrapper">
<p class="pr-review-count">Reviewed by 2 customers</p>


<!--
<div class="pr-review-sort-box">
<p class="pr-review-sort-by">Sort by</p>
<select onchange="POWERREVIEWS.display.startSort(this, '219909', 'en_GB', 'engine-219909-en_GB', POWERREVIEWS.common.getOptions('engine-219909-en_GB'));">
<option selected="true" value="date_new">Newest</option>
<option value="date_old">Oldest</option>
<option value="rating_high">Highest rating</option>
<option value="rating_low">Lowest rating</option>
<option value="helpful_high">Most helpful</option>
<option value="helpful_low">Least helpful</option>
</select>
</div>

-->

<div class="pr-clear"></div>
</div>
</div>
</div>
<div id="pr-contents-219909" class="pr-contents">
<div class="pr-contents-wrapper">
<div class="pr-pagination-top">
<div class="pr-page-count-wrapper">
<p class="pr-page-count">
Displaying reviews
<strong>1-2</strong>
</p>
<p class="pr-nav-back-to-top">
<a data-pr-event="header-back-to-top-link" href="#header">Back to top</a>
</p>
</div>

<div class="pr-review-most-helpful">
<p>
(
<span>2 of 2</span>
customers found this review helpful)
</p>
</div>

<div class="pr-clear"></div>
</div>



<?php

$review_info = $product->review($product_id);

foreach($review_info as $review)
{


?>

<!-------START REVIEW---------->

<div class="pr-review-wrap" >


<div class="pr-review-rating-wrapper">
<div class="pr-review-author-date pr-rounded"><?php echo $review['date']; ?></div>
<div class="pr-review-rating">



 <?php
		/*
		$total_rating = $review['rating'];
		$no_of_rating = $product_info['no_of_rating'];
		
		$rating = $total_rating / $no_of_rating ; 
		$rating_point = $rating ;
		
		$rating_point = round($rating_point,1);
		*/
		
		$rating = $review['rating'];
		$rating = $rating * 100 ; 
		$rating = $rating / 5 ;
		
		
		?>
        <table>
        <tr>
        <td>
        <span class="star_span">
                <span style="display: block; width: <?php echo $rating; ?>%; height: 13px; background: url(images/star-rating-sprite.png) 0 -13px;"></span>
           	  </span>
         </td>
         <td>
        
        <div class="star_number"><span><?php echo $review['rating']; ?></span></div>  
        </td>
        </tr>
        </table>












<p class="pr-review-rating-headline"><?php echo $review['headline']; ?></p>
</div>




</div>



<div class="">
<div class="pr-review-author-info-wrapper">
<p class="pr-review-author-name">
By&nbsp;
<span><?php echo $review['nickname']; ?></span>
</p>
<p class="pr-review-author-location">
from
<span><?php echo $review['location']; ?></span>
</p>



<div class="pr-review-text">
<p class="pr-comments-header">
Comments:
</p>
<p class="pr-comments"><?php echo $review['comments']; ?></p>
</div>

</div>
</div>


</div>


<!-----------------END------------------------>

<?php
}
?>







</div>
</div>
</div>
        
        
        
        
        
        <!-- END OF SHOW REVIEW-->
		
	</div>
	<div id="deliverydetails" class="tabcontent">
		<div class="deliveryinfo" style="margin-left:20px !important;" >
			<!-- <h2>SHOW UPDATE</h2>-->
<?php echo $product_info['terms']; ?>
<div class="clear"></div>




		</div>
	</div>
</div>
</div>
<!-- tabs end-->
</div>

<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery(".pr-nav-back-to-top a").attr("href", "#header");
	});
	

	$('div.desc').on("click", ".pr-snippet-read-reviews a", function(event){
		$('ul.tabNavigation li#review a').click();
		$(document).scrollTop($('div.tabs').offset().top);
		return false
	});


</script>



<script type="text/javascript">var addthis_config = {"data_track_clickback":true};var addthis_share = { email_vars: { invt_id: "219909" } } </script>
<script type="text/javascript" src="https://s7.addthis.com/js/250/addthis_widget.js?username=superdrugcreative"></script>
</div>





<div id="colone">
<div class="categorynavigation">
  <ul>
    <li class="navhair"><a href="category_page.php?cat_id=<?php echo $product_info['category_id']; ?>" title="<?php echo $product_info['category_name']; ?>"><span><?php echo $product_info['category_name']; ?></span></a>
      <ul>
  
  <?php
  
  $sub_cat_all_data= $product->getSubCategoryAll();
 // var_dump($sub_cat_data);
  if($sub_cat_all_data != NULL)
  {
	  foreach($sub_cat_all_data as $sub_cat_all_info)
	  {
  
  ?>      

 <li class="nav-hair-shampoos"><a href="category_product.php?sub_category_id=<?php echo $sub_cat_all_info['sub_category_id']; ?>" title="<?php  echo $sub_cat_info['sub_category_name']; ?>"><?php echo $sub_cat_all_info['sub_category_name']; ?></a></li>

     <?php
	  }
  }
  
  ?>
 
     
      </ul>
      
      
    </li>
  </ul>
</div>
<!--<ul>
*
*
</ul>-->
<div class="Lcat_colone"><div class="leftcolpromotions">


    <!--<ul class="promotions"> 
        
<li class="prolist1 freedeliveryover25 first">
        <a title="FREE DELIVERY on orders over  BDT25 - Standard &pound;3 - Next day: &pound;5.50" href="http://www.superdrug.com/help+info/delivery-information/page/deliveryinfo"> 
         
        	<img src="http://www.superdrug.com/content/ebiz/superdrug/stry/freedeliveryover25/c-freedelivery.jpg" name=image alt="FREE DELIVERY on orders over &pound;25 - Standard &pound;3 - Next day: &pound;5.50">
            
            
        	
        	<span class="gt">&gt;</span> 
        </a>
     </li>  
 
<li class="prolist2 lefcolfreegiftswithpurhcs">
        <a title="Free gifts with purchase" href="http://www.superdrug.com/free-gifts/free-gifts-with-selected-purchases/icat/f_gwp"> 
         
        	<img src="http://www.superdrug.com/content/ebiz/superdrug/stry/lefcolfreegiftswithpurhcs/c-freegifts.jpg" name=image alt="Free gifts with purchase">
            
            
        	
        	<span class="gt">&gt;</span> 
        </a>
     </li>  
 
<li class="prolist3 holidayshop2013">
        <a title="Holiday Shop 2013" href="http://www.superdrug.com/events-2013/holiday-shop/page/holidayshop"> 
         
        	<img src="http://www.superdrug.com/content/ebiz/superdrug/stry/holidayshop2013/summershop_rlb.jpg" name=image alt="Holiday Shop 2013">
            
            
        	
        	<span class="gt">&gt;</span> 
        </a>
     </li>  
 
    </ul>-->
 
</div></div>
</div>
