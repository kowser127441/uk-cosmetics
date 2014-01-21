<?php

$category_id = $_REQUEST['cat_id'];

include('categoryClass.php');

$cat = new Category($category_id);


?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title> <?php echo $cat->getCatName(); ?> at LondonCosmeticsBd </title>

<meta name="description" content="Buy products online at loncosmeticsbd.com  we serve Lipe care, Night Creams , Talcum Powder, Facial wash, Toners, Shower Gels & Creams, Soaps, Body Lotions and Body Spray. Buy great brands including The Body Shop,loreal, Mark & spencer, Boots, loreal, Nivea. View and add reviews to the great products you’re tried." />
    <meta name="keywords" content="Buy products online at loncosmeticsbd.com  we serve Lipe care, Night Creams , Talcum Powder, Facial wash, Toners, Shower Gels & Creams, Soaps, Body Lotions and Body Spray. Buy great brands including The Body Shop,loreal, Mark & spencer, Boots, loreal, Nivea. View and add reviews to the great products you’re tried.
" />



<meta name="verify-v1" content="Cito5LmzgVUE4uNVGwWZt3DJvs0F0w2oNIHFtwDlwb4=">
<meta name="google-site-verification" content="5q-mCCAR4TLkljNuR6YUq3OCgmeKNdha8kuoWC1EtSE" />
<meta name="msvalidate.01" content="17C3D90CD4ED95BA913770CEC969388D" />
<meta name="viewport" content="980px">
<meta name="language" content="english">

<!-- added for IE Pinned Tile -->
<meta name="application-name" content="Superdrug.com"/>
<meta name="msapplication-TileColor" content="#ffffff"/>
<meta name="msapplication-TileImage" content="../images/superdrugtile.png"/>


<link rel="stylesheet" href="css/stylesv2.css" type="text/css" media="screen">
<!--[if IE 6]><link rel="stylesheet" href="http://www.superdrug.com/content/ebiz/superdrug/resources/css/ie6.css" type="text/css" media="screen"><![endif]-->
<!--[if lte IE 7]><link rel="stylesheet" href="http://www.superdrug.com/content/ebiz/superdrug/resources/css/ie7.css" type="text/css" media="screen"><![endif]-->
<!--[if IE 8.000]><link rel="stylesheet" href="http://www.superdrug.com/content/ebiz/superdrug/resources/css/ie8.css" type="text/css" media="screen"><![endif]-->
<link rel="stylesheet" href="css/container.css" type="text/css" media="screen"> 
<link rel="stylesheet" href="css/print.css" type="text/css" media="print"> 
<link rel="shortcut icon" type="image/x-icon" href="images/faviconi.ico"> 

<link rel="stylesheet" href="css/header.css" type="text/css" media="screen">
<script type="text/javascript" src="js/full.js"></script>

<script src="js/a29fc34d976d7e5210f052343af2e81e.js?1376920210"></script>
</head>
<body id="baby" class="   baby  ">
<a href="#content" class="hide">Skip to content</a>
<!-- start wrapper -->
<div id="wrapper">
<!-- start header -->
<div id="header-2012-wrapper" class="clearfix">

<!-- start header -->

<?php include("header.php"); ?>



<!-- end header -->

<!-- start nav -->
<div id="mainNav-wrapper-2012">


<?php include("menu.php"); ?>

<!-- venda_category rec=icat,ref=shop,temp=mainmenu_l1_2012,cacheall=1 -->
</div>
<!-- end nav -->

<!-- start of header bottom links -->
<style>
#header-bottom-links ul {
  float: left;
  width: 739px;
}
#header-links {
  background:none!important; 
  padding:0!important; 
  margin:0!important; 
  border:0!important;
}
#header-links li {
  background: url("../images/core/tabpbg.gif") repeat-x 0 100%;
  border: 1px solid #D3D3D3;
  border-radius: 5px 5px 5px 5px;
  margin: 0 10px 0 0; padding: 8px 10px;
  float:left;
}
#header-links li.first {
  width: 635px;
}
#socialmedia-links {
  width: 219px!important; 
  text-align: center; 
  margin: 0!important; 
  padding: 0!important; 
  height: 30px!important;
}

#header-links li.last {
	width: 40px;
}
</style>



</div>


<!-- start of crumbtrail -->
<div class="Lcat_crumbtrail-con"><p class="Lcattree crumbtrail"><a href="index.php" class="treehome">Home</a><a href="category_page.php?cat_id=<?php echo $category_id; ?>" class="menuFontNonSelected"><?php echo $cat->getCatName(); ?></a></p>
</div>
<!-- end of crumbtrail -->


<!-- end header -->

<div id="content" class="clearfix">

<div id="coltwo">




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



<div id="categorylist">
        <div class="catlevelheader catlevel1header clearfix" >
            <h1><?php echo $cat->getCatName(); ?></h1>
             
            
    </div>
     <div id="catgoldspot">
        



    <h2>WHAT'S NEW</h2>
	<div class="catgoldtabswrap morethan1">
        <ul class="catgoldtabs">
            
    <li class="goldtabno1 e0913dwcat_colourb4 first">
        
        <a  href="javascript:;">
            <span class="h2">1</span>
       </a>
        
     </li>
 
    <li class="goldtabno2 e0913dwcat_sherzinger">
        
        <a  href="javascript:;">
            <span class="h2">2</span>
       </a>
        
     </li>
 
    <li class="goldtabno3 e0913sdcatds_tresemme">
        
        <a  href="javascript:;">
            <span class="h2">3</span>
       </a>
        
     </li>
 
        </ul>
    </div>
<script type="text/javascript">$(document).ready(function() {$.goldList($(".catgoldtabs li a"),$("#catgoldoutput li"), {start_item:0});});</script>    
         
 
        

    <ul id="catgoldoutput" class="promotions"> 
    
    <?php
	
	$slider_image=$cat->getSliderImage();
	if($slider_image != NULL)
	{
	foreach($slider_image as $slide)
	{
	
	?>
        
<li class="prolist1">
        
        	<img src="<?php  echo $slide['image']; ?>" style="width:780px; height:260px;" >        	
           
                
            
             <!--   <span class="gt"&gt;</span> -->
        
     </li>
     
     <?php
	}
	}
	 

	 ?>
     

    </ul>
 

 
    </div>      
    
        <div class="catlevel categoryofferslist">
            
<!--
	<h3>Top offers</h3>
   <div class="categoryofferslist">
       <ul class="catlistfp clearfix">
	   
	   <?php
	   
	   $cat_data = $cat->getTopOffers();
	  
	   foreach($cat_data as $category)
	   {
	   
	   ?>
	   
	   
<li class="catbanner cb1 cblorealexc_2013e9 clearfix">
  
	<a title="<?php echo $category['product_name']; ?>" href="view_product.php?product_id=<?php echo $category['product_id']; ?>">
	<span class="cbleft">
         
        
            

    
        <img src="<?php echo $category['picture']; ?>"` border=0 name=medium alt="<?php echo $category['product_name']; ?>"> 
    
                 
    </span>
    <span class="cbright ">
    	<span class="bannertype"> 
    	
     	
        	<span class="save savep nowon typeitem">
            	  <span class="small">now</span><span class="medx"><span class="pound">&pound;</span><?php echo $category['discount']; ?></span>
             </span>
         
     	
             
       	</span>
        
       
        
    </span>
    </a>
    
    
</li>

<?php
}

?>





</ul>
   </div>

-->
        </div> 
     
      
    
    <div class="catlevel1 catlevel">
    	<h3>Top <?php echo $cat->getCatName(); ?> Brands</h3>
      <ul class="catlevel2list catlevellist clearfix">
       
        <?php
		
		$brand_info=$cat->getBrands();
		//var_dump($brand_info);
		
		foreach($brand_info as $brand)
		
		{
		?>
        
          <li><a href="category_product.php?brand_id=<?php echo $brand['brand_id']?>&category_id=<?php echo $category_id; ?>" title="<?php echo $brand['brand_name']; ?>">
            <?php echo $brand['brand_name']; ?>
            </a></li>
           
        
         <?php
		 }
		 
		 ?>
		
      </ul>
	 
    </div>
    
      
    <div class="catlevel1 catlevel">
    <h3>Top <?php echo $cat->getCatName(); ?> Categories</h3>
        <ul class="catlevel1list catlevellist clearfix">
            
<?php

	$sub_cat =$cat->getSubCategory();
		if($sub_cat != NULL)
		{
			$i=1;
		foreach($sub_cat as $subCategory)
		
		{
		?>



   <li class="subcatlist<?php echo $i; ?>">
   
   
   
	
    
   <a href="category_product.php?sub_category_id=<?php echo $subCategory['sub_category_id']?>" title="<?php echo $subCategory['sub_category_name']; ?>">
   
   
   
   
   <span><?php echo $subCategory['sub_category_name']; ?></span> <span class="ga"></span> <img src="<?php echo $subCategory['picture']; ?>" name=icatimage alt="<?php echo $subCategory['sub_category_name']; ?>">
   
   </a></li>




<?php
$i++;
		}
		}
?>



        </ul>    	
    </div> 
  <div id="catbestsellers" class="bestsellersElement">

	

<!--venda_locayta template=bestsellers_ul_image,template_type=includes,perpage=4,fieldrtype=type,termtextrtype=invt,typertype=exact,fieldpcatid=pcatid,termtextpcatid=hair,typepcatid=exact,fieldcatrestrict=xancestorid,termtextcatrestrict=shop,typecatrestrict=exact,typeusersalesrank=rangefilter,minusersalesrank=1,maxusersalesrank=,fieldusersalesrank=usersalesrank,setsortorder=usersalesrank,setsortusersalesrank=ASCENDING-->

<!-- onicat -->
	


	<!-- solr bestsellers -->
        <h2 class="bestsellerstitle"><span id="hdrBestsellers"></span> Bestsellers</h2>
        <ul class="featprods clearfix">
        <?php
        
        $best_sell_info=$cat->getProducts();
		if($best_sell_info != NULL)
		{
		foreach($best_sell_info as $best_seller)
		
		{
		?>
        
        
        
	<li class="details detail255451 p255451 csuperdrugownbrand chair-shampoos cnwoffhairb chair-dryshampoo cnwoffhair">
    <div class="image"> 
    
        <a href="view_product.php?product_id=<?php echo $best_seller['product_id']; ?>" title="<?php echo $best_seller['product_name']; ?>"><img src="<?php echo $best_seller['picture']; ?>" name=medium alt="Superdrug Dry Shampoo Chocolate Brownie 150ml"></a>
    
    
</div>
<div class="detailswrap">
    <h2><a href="view_product.php?product_id=<?php echo $best_seller['product_id']; ?>">
	<?php echo $best_seller['product_name']; ?></a></h2>
    
    <div class="price clearfix">
        <div class="now"><span class="pricename">now</span> <span class="priceno">BDT <?php echo $best_seller['price']; ?></span></div>
         
            
        <div class="unitofmeasure">&#163;1.33 per 100ml</div>
     </div> 
    

    <div class="earnpoint hide">Earn  <span id="earnpoint-255451"><?php echo $best_seller['earn_point']; ?></span> Point</div>  
        
            
       <!--     
		<div class="promotext"><a href="http://www.superdrug.com/2-for-psx/2-for-ps3-on-selected-superdrug-dry-shampoo/icat/2013e9_sddryshampoo" title="View all 2 for ৳ 3 promotion">2 for ৳ 3 ></a></div>
        -->    
            <div class="clear"></div>
                
    
    
        <form name="addproductmini255451form" action="cart.php" method="get" id="addproductmini255451form">
            <input type="hidden" name="product_id" value="<?php echo $best_seller['product_id']; ?>">
            <input type="hidden" name="command" value="add">
            
        <div class="baskettools clearfix">
            <div class="qty"><label for="qty255451">Qty:</label><input name="qty" id="qty255451" type="text" value="1" size="2" maxlength="2"></div>
            <div class="addtobasket"><input type="image" type="submit" src="images/add_to_cart.gif" /></div>
        </div>
        </form>
     
     
    
    
    
</div>
</li>

<?php
		}
		}
		
		?>
  

  
  
</ul>





		


</div>

 </div>

</div>
<div id="colone">
<div class="categorynavigation">
  <ul>
    <li class="navhair"><a href="category_page.php?cat_id=<?php echo $category_id; ?>" title="<?php echo $cat->getCatName(); ?>"><span><?php echo $cat->getCatName(); ?></span></a>
      <ul>
  
  <?php
  
  $sub_cat_data= $cat->getSubCategory();
  if($sub_cat_data != NULL)
  {
	  foreach($sub_cat_data as $sub_cat_info)
	  {
  
  ?>      

 <li class="nav-hair-shampoos"><a href="category_product.php?sub_category_id=<?php echo $sub_cat_info['sub_category_id']; ?>" title="<?php echo $sub_cat_info['sub_category_name']; ?>"><?php echo $sub_cat_info['sub_category_name']; ?></a></li>


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


  
</div></div>
</div>
</div><!-- end content -->

<!-- start footer-->

<?php include('footer.php'); ?>

<!--end footer -->

</div>
<!-- end wrapper -->
<script type="text/javascript">
Venda.Ebiz.awCookieChecker(location.href);
</script>
<!-- Start Peerius -->


<script type="text/javascript" src="//superdrug.peerius.com/tracker/peerius.page" charset="UTF-8"></script>
<!-- End Peerius -->




<!-- Start Net Media Planet Tracking -->
<script type="text/javascript">
var __stormJs = 't1.stormiq.com/dcv4/jslib/4413_430D23BF_7C97_4644_B4E3_BED7DF0D79EB.js';
</script>
<script type="text/javascript" src="/content/ebiz/superdrug/resources/js/netmediaplanet/track.js"></script>
<!-- End Net Media Planet Tracking -->









<!-- if on a non-secure page pull in the non-secure JS -->
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
	</script>


<!-- standard tag for non shopcart/register workflow-->
	<script type="text/javascript">
	
	
	_uacct = "UA-1503978-1";
	
	urchinTracker();
	
	</script>









<!-- Yahoo Universal -->
<script type="text/javascript">
<!-- Yahoo! Inc.
var ysm_accountid = "117I8CE25OH62D7CCURHPR026U8";
document.write("<SCR" + "IPT language='JavaScript' type='text/javascript' " 
+ "SRC=//" + "srv0.wa.marketingsolutions.yahoo.com" + "/script/ScriptServlet" + "?aid=" + ysm_accountid + "></SCR" + "IPT>");
// -->
</script>









<script type="text/javascript">
// This function keeps the nav open when using the Category Navigation (Navigation Settings) element
openNav('hair','');
</script>




</body>
</html>