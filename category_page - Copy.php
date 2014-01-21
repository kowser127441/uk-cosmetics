<?php

$category_id = $_REQUEST['cat_id'];

include('categoryClass.php');

$cat = new Category($category_id);


?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title> <?php echo $cat->getCatName(); ?> at Superdrug </title>

<meta name="description" content="Hair products on superdrug.com including hair dye, shampoo, conditioner, styling and accessories. Buy great brands including John Frieda, Nice N Easy, Aussie, Tresemme, L’Oreal Elvive. View and add reviews to the great products you’re tried" />
    <meta name="keywords" content="Buy hair products online at superdrug.com, offers, reviews, savings, discounts, shampoo, conditioner, styling, hair dye and dye removal, hair care, accessories, salon hair care, John Frieda, Colour B4, L’Oreal, Tresemme, Aussie, Nice n easy, Garnier" />



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
<link rel="shortcut icon" type="image/x-icon" href="http://www.superdrug.com/content/ebiz/superdrug/resources/images/core/favicon.ico"> 

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

<!--<div id="header-bottom-links" class="clearfix">
	<ul id="header-links">
    	<li class="first" id="hbl-free" style="text-transform:uppercase;">
<a title="Free Standard Delivery for purchases over &pound;25" href="/page/deliveryinfo"> Free Standard Delivery for purchases over &pound;25 <span class="gt">&gt;</span>

<!--<a title="Free Standard Delivery on all orders " href="/page/deliveryinfo"> Free Standard Delivery on all orders - Ends 30th July<span class="gt">&gt;</span>

</a></li>
        <li class="last"><a title="DARE" href="http://www.superdrug.com/dare/dare-page/page/dare-page" id="hbl-dare"> DARE </a></li>
    </ul>
    <ul id="socialmedia-links" class="clearfix" style="">
		<li style="text-align:center;"><a href="http://www.superdruglookatme.com" title="look at Me - Brought to you by Superdrug" style="display: block; text-indent: -9999px; background: url(/content/ebiz/superdrug/resources/images/topnav/lookatme.jpg) 3px 0px no-repeat transparent; height: 32px;">Look at me - brought to you by superdrug</a></li>
	</ul>
</div>-->
<!-- end of header bottom links -->

</div>


<!-- start of crumbtrail -->
<div class="Lcat_crumbtrail-con"><p class="Lcattree crumbtrail"><a href="/" class="treehome">Home</a><a href="http://www.superdrug.com/hair/icat/hair" class="menuFontNonSelected"><?php echo $cat->getCatName(); ?></a></p>
</div>
<!-- end of crumbtrail -->


<!-- end header -->

<div id="content" class="clearfix">
<div id="coltwo">
<div id="categorylist">
        <div class="catlevelheader catlevel1header clearfix" >
            <h1><?php echo $cat->getCatName(); ?></h1>
             
            
    </div>
     <div id="catgoldspot">
        



    <h2>WHAT'S NEW</h2>
	<div class="catgoldtabswrap morethan1">
        <ul class="catgoldtabs">
            
    <li class="goldtabno1 e0913dwcat_colourb4 first">
        
        <a title="Save 1/3 on selected Colour B4" href="javascript:;">
            <span class="h2">1</span>
       </a>
        
     </li>
 
    <li class="goldtabno2 e0913dwcat_sherzinger">
        
        <a title="#Scherzinghair" href="javascript:;">
            <span class="h2">2</span>
       </a>
        
     </li>
 
    <li class="goldtabno3 e0913sdcatds_tresemme">
        
        <a title="3 for £10 on selected TRESemmé" href="javascript:;">
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
        <a title="Save 1/3 on selected Colour B4" href="http://www.superdrug.com/colour-b4/icat/e9_colourb4"> 
        	<img src="<?php  echo $slide['image']; ?>" name=image alt="Save 1/3 on selected Colour B4" style="width:780px; height:260px;">        	
           
                
            
                <span class="gt">&gt;</span>
        </a>
     </li>
     
     <?php
	}
	}
	 

	 ?>
     

    </ul>
 

 
    </div>      
    
        <div class="catlevel categoryofferslist">
            

	<h3>Top offers</h3>
   <div class="categoryofferslist">
       <ul class="catlistfp clearfix">
	   
	   <?php
	   
	   $cat_data = $cat->getTopOffers();
	   if($cat_data != NULL)
	   {
	   foreach($cat_data as $category)
	   {
	   
	   ?>
	   
	   
<li class="catbanner cb1 cblorealexc_2013e9 clearfix">
  
	<a title="<?php echo $category['product_name']; ?>" href="http://www.superdrug.com/other-savings/now-ps5-on-selected-loreal-excellence/icat/lorealexc_2013e9">
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
}
?>



<li class="catbanner cb3 cb2013e9_nnebase clearfix">
  
	<a title="2 for £10 on selected Nice N Easy Base" href="http://www.superdrug.com/2-for-psx/2-for-ps10-on-selected-nice-n-easy-base/icat/2013e9_nnebase">
	<span class="cbleft">
 
        <img src="http://www.superdrug.com/content/ebiz/superdrug/invt/211856/211856_m.jpg" border=0 name=medium alt="Nice N Easy Natural Light Golden Blonde"> 
    

                    
    </span>
    <span class="cbright ">
    	<span class="bannertype"> 
    	
  	
        	<span class="txforx typeitem">
            	  <span class="med">2</span> <span class="small">for</span> <span class="med"><span class="pound">&pound;</span>10</span>
             </span>
         
           
       	</span>
        
        <span class="bannertitle">
			<span class="brandlink">
                on selected Nice N Easy Base
            </span>
        </span>
        
    </span>
    </a>
    
    
</li>

<li class="catbanner cb4 cb2013e9_tresemmemass clearfix">
  
	<a title="3 for £10 on selected Tresemme" href="http://www.superdrug.com/3-for-psx/3-for-ps10-on-selected-tresemme/icat/2013e9_tresemmemass">
	<span class="cbleft">
         
        
            

    
        <img src="http://www.superdrug.com/content/ebiz/superdrug/invt/619451/619451_m.jpg" border=0 name=medium alt="TRESemm&eacute; Platinum Leave In Treatment 150ml"> 
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

                    
    </span>
    <span class="cbright ">
    	<span class="bannertype"> 
    	
    	
    	
    	      
    	
    	
    	                                       
    	
    	
    	         
    	

    	         

    	

    	

    	         
         
    	
         
          
    	        
    	
    	 
    	                  
    	          
    	
    	


    	
        	<span class="txforx typeitem">
            	  <span class="med">3</span> <span class="small">for</span> <span class="med"><span class="pound">&pound;</span>10</span>
             </span>
         
    	
    	

    	
    	
    	                  
 		
        
         
 
     	
     	
         
         
         
         
         
             
       	</span>
        
        <span class="bannertitle">
			<span class="brandlink">
                on selected Tresemme
            </span>
        </span>
        
    </span>
    </a>
    
    
</li>

<li class="catbanner cb5 cb2013e9_aussie-hns clearfix">
  
	<a title="2 for £6 on selected Aussie Small & Head & Shoulders" href="http://www.superdrug.com/2-for-psx/2-for-ps6-on-selected-aussie-small+head+shoulders/icat/2013e9_aussie-hns">
	<span class="cbleft">
         
        
            

    
        <img src="http://www.superdrug.com/content/ebiz/superdrug/invt/315751/315751_m.jpg" border=0 name=medium alt="Aussie Conditioner Colour Mate 250ml"> 
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

                    
    </span>
    <span class="cbright ">
    	<span class="bannertype"> 
    	
    	
    	
    	      
    	
    	
    	                                       
    	
        	<span class="txforx typeitem">
            	  <span class="med">2</span> <span class="small">for</span> <span class="med"><span class="pound">&pound;</span>6</span>
             </span>
         
    	
    	         
    	

    	         

    	

    	

    	         
         
    	
         
          
    	        
    	
    	 
    	                  
    	          
    	
    	


    	
    	
    	

    	
    	
    	                  
 		
        
         
 
     	
     	
         
         
         
         
         
             
       	</span>
        
        <span class="bannertitle">
			<span class="brandlink">
                on selected Aussie Small & Head & Shoulders
            </span>
        </span>
        
    </span>
    </a>
    
    
</li>

<li class="catbanner cb6 cb2013e9_castingcreme clearfix">
  
	<a title="2 for £10 on Casting Creme Gloss" href="http://www.superdrug.com/2-for-psx/2-for-ps10-on-casting-creme-gloss/icat/2013e9_castingcreme">
	<span class="cbleft">
         
        
            

    
        <img src="http://www.superdrug.com/content/ebiz/superdrug/invt/587362/587362_m.jpg" border=0 name=medium alt="Casting Creme Gloss Sweet Honey 830"> 
    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

    

                    
    </span>
    <span class="cbright ">
    	<span class="bannertype"> 
    	
    	
    	
    	      
    	
    	
    	                                       
    	
        	<span class="txforx typeitem">
            	  <span class="med">2</span> <span class="small">for</span> <span class="med"><span class="pound">&pound;</span>10</span>
             </span>
         
    	
    	         
    	

    	         

    	

    	

    	         
         
    	
         
          
    	        
    	
    	 
    	                  
    	          
    	
    	


    	
    	
    	

    	
    	
    	                  
 		
        
         
 
     	
     	
         
         
         
         
         
             
       	</span>
        
        <span class="bannertitle">
			<span class="brandlink">
                on Casting Creme Gloss
            </span>
        </span>
        
    </span>
    </a>
    
    
</li>



</ul>
   </div>

        </div> 
     
      
    
    <div class="catlevel1 catlevel">
    	<h3>Top Hair Brands</h3>
      <ul class="catlevel2list catlevellist clearfix">
        
        <?php
		
		$brand_info=$cat->getBrands();
		if($brand != NULL)
		{
		foreach($brand_info as $brand)
		
		{
		?>
        
          <li><a href="http://www.superdrug.com/icat/john&#37;20frieda" title="<?php echo $brand['brand_name']; ?>">
            <?php echo $brand['brand_name']; ?>
            </a></li>
        
         <?php
		 }
		 }
		 ?>
		 <!--
		 
          <li><a href="http://www.superdrug.com/icat/nice&#37;20n&#37;20easy" title="Nice N Easy">
            Nice N Easy
            </a></li>
        
        
          <li><a href="http://www.superdrug.com/icat/aussie" title="Aussie">
            Aussie
            </a></li>
        
        
          <li><a href="http://www.superdrug.com/icat/tresemme" title="Tresemme">
            Tresemme
            </a></li>
        
        
          <li><a href="http://www.superdrug.com/icat/schwarzkopf" title="Schwarzkopf">
            Schwarzkopf
            </a></li>
        
        
          <li><a href="http://www.superdrug.com/icat/andrew&#37;20collinge" title="Andrew Collinge">
            Andrew Collinge
            </a></li>
        
        
          <li><a href="http://www.superdrug.com/icat/superdrug" title="Superdrug">
            Superdrug
            </a></li>
        
       --> 
      </ul>
	 
    </div>
    
      
    <div class="catlevel1 catlevel">
        <ul class="catlevel1list catlevellist clearfix">
            

   <li class="subcatlist1 hair-shampoos">
   
   
   
	
    
   <a href="http://www.superdrug.com/hair/shampoos/icat/hair-shampoos" title="Shampoos">
   
   
   
   
   <span>Shampoos</span> <span class="ga"></span> <img src="http://www.superdrug.com/content/ebiz/superdrug/icat/hair-shampoos/e0513jhcatbox_sham.jpg" name=icatimage alt="Shampoos">
   
   </a></li>



   <li class="subcatlist2 hair-conditioners">
   
   
   
	
    
   <a href="http://www.superdrug.com/hair/conditioners/icat/hair-conditioners" title="Conditioners">
   
   
   
   
   <span>Conditioners</span> <span class="ga"></span> <img src="http://www.superdrug.com/content/ebiz/superdrug/icat/hair-conditioners/e0513jhcatbox_cons.jpg" name=icatimage alt="Conditioners">
   
   </a></li>



   <li class="subcatlist3 hair-colourants">
   
   
   
	
    
   <a href="http://www.superdrug.com/hair/hair-colourants/icat/hair-colourants" title="Hair Colourants">
   
   
   
   
   <span>Hair Colourants</span> <span class="ga"></span> <img src="http://www.superdrug.com/content/ebiz/superdrug/icat/hair-colourants/e0513jhcatbox_colour.jpg" name=icatimage alt="Hair Colourants">
   
   </a></li>



   <li class="subcatlist4 hair-styling">
   
   
   
	
    
   <a href="http://www.superdrug.com/hair/hair-styling/icat/hair-styling" title="Hair Styling">
   
   
   
   
   <span>Hair Styling</span> <span class="ga"></span> <img src="http://www.superdrug.com/content/ebiz/superdrug/icat/hair-styling/e0513jhcatbox_style.jpg" name=icatimage alt="Hair Styling">
   
   </a></li>



   <li class="subcatlist5 hair-professional">
   
   
   
	
    
   <a href="http://www.superdrug.com/hair/professional-hair/icat/hair-professional" title="Professional Hair">
   
   
   
   
   <span>Professional Hair</span> <span class="ga"></span> <img src="http://www.superdrug.com/content/ebiz/superdrug/icat/hair-professional/e0513jhcatbox_procare.jpg" name=icatimage alt="Professional Hair">
   
   </a></li>



   <li class="subcatlist6 hair-treatments">
   
   
   
	
    
   <a href="http://www.superdrug.com/hair/treatments/icat/hair-treatments" title="Treatments">
   
   
   
   
   <span>Treatments</span> <span class="ga"></span> <img src="http://www.superdrug.com/content/ebiz/superdrug/icat/hair-treatments/e0513jhcatbox_treat.jpg" name=icatimage alt="Treatments">
   
   </a></li>



   <li class="subcatlist7 hair-2in1">
   
   
   
	
    
   <a href="http://www.superdrug.com/hair/2-in-1/icat/hair-2in1" title="2 in 1">
   
   
   
   
   <span>2 in 1</span> <span class="ga"></span> <img src="http://www.superdrug.com/content/ebiz/superdrug/icat/hair-2in1/e0513jhcatbox_2in1.jpg" name=icatimage alt="2 in 1">
   
   </a></li>



   <li class="subcatlist8 hair-kids">
   
   
   
	
    
   <a href="http://www.superdrug.com/hair/kids/icat/hair-kids" title="Kids">
   
   
   
   
   <span>Kids</span> <span class="ga"></span> <img src="http://www.superdrug.com/content/ebiz/superdrug/icat/hair-kids/e0513jhcatbox_baby.jpg" name=icatimage alt="Kids">
   
   </a></li>



   <li class="subcatlist9 hair-hairloss">
   
   
   
	
    
   <a href="http://www.superdrug.com/hair/hair-loss-solutions/icat/hair-hairloss" title="Hair Loss Solutions">
   
   
   
   
   <span>Hair Loss Solutions</span> <span class="ga"></span> <img src="http://www.superdrug.com/content/ebiz/superdrug/icat/hair-hairloss/e0513jhcatbox_loss.jpg" name=icatimage alt="Hair Loss Solutions">
   
   </a></li>



   <li class="subcatlist10 hair-electricals">
   
   
   
	
    
   <a href="http://www.superdrug.com/hair/electricals/icat/hair-electricals" title="Electricals">
   
   
   
   
   <span>Electricals</span> <span class="ga"></span> 
    
   </a></li>


        </ul>    	
    </div> 
  <div id="catbestsellers" class="bestsellersElement">

	

<!--venda_locayta template=bestsellers_ul_image,template_type=includes,perpage=4,fieldrtype=type,termtextrtype=invt,typertype=exact,fieldpcatid=pcatid,termtextpcatid=hair,typepcatid=exact,fieldcatrestrict=xancestorid,termtextcatrestrict=shop,typecatrestrict=exact,typeusersalesrank=rangefilter,minusersalesrank=1,maxusersalesrank=,fieldusersalesrank=usersalesrank,setsortorder=usersalesrank,setsortusersalesrank=ASCENDING-->

<!-- onicat -->
	


	<!-- solr bestsellers -->
        <h2 class="bestsellerstitle"><span id="hdrBestsellers"></span> Bestsellers</h2>
        <ul class="featprods clearfix">
	<li class="details detail255451 p255451 csuperdrugownbrand chair-shampoos cnwoffhairb chair-dryshampoo cnwoffhair">
    <div class="image"> 
    
        <a href="http://www.superdrug.com/superdrug/superdrug-dry-shampoo-chocolate-brownie-150ml/invt/255451" title="Superdrug Dry Shampoo Chocolate Brownie 150ml"><img src="http://www.superdrug.com/content/ebiz/superdrug/invt/255451/255451_m.jpg" name=medium alt="Superdrug Dry Shampoo Chocolate Brownie 150ml"></a>
    
    
</div>
<div class="detailswrap">
    <h2><a href="http://www.superdrug.com/superdrug/superdrug-dry-shampoo-chocolate-brownie-150ml/invt/255451">Superdrug Dry Shampoo Chocolate Brownie 150ml</a></h2>
    
    <div class="price clearfix">
        <div class="now"><span class="pricename">now</span> <span class="priceno">£1.99</span></div>
         
            
        <div class="unitofmeasure">&#163;1.33 per 100ml</div>
     </div> 
    

    <div class="earnpoint hide">Earn  <span id="earnpoint-255451">1.99</span> Point</div>  
        
            
            
		<div class="promotext"><a href="http://www.superdrug.com/2-for-psx/2-for-ps3-on-selected-superdrug-dry-shampoo/icat/2013e9_sddryshampoo" title="View all 2 for £3 promotion">2 for £3 ></a></div>
            
            <div class="clear"></div>
                
    
    
        <form name="addproductmini255451form" action="http://www.superdrug.com/bin/venda" method="get" id="addproductmini255451form">
            <input type="hidden" name="bsref" value="superdrug">
            <input type="hidden" name="log" value="22">
            <input type="hidden" name="mode" value="add">
            <input type="hidden" name="curpage" value="">
            <input type="hidden" name="next" value="">
            <input type="hidden" name="ex" value="co_disp-shopc">
            <input type="hidden" name="buy" value="255451">
            <input type="hidden" name="invt" value="255451">
            <input type="hidden" name="ivref" value="255451">
            <input type="hidden" name="htxt" value="NhtCNJRJI9nj7bVdt01oxRWKRfkCcnVFOQiiBD8nZGO2pzJG2jPc%2BNnB0f3xTBWI%2BuZ2vGvlmxeqEPaA6GN6mw%3D%3D">
        <div class="baskettools clearfix">
            <div class="qty"><label for="qty255451">Qty:</label><input name="qty" id="qty255451" type="text" value="1" size="2" maxlength="2"></div>
            <div class="addtobasket"><a href="#" onClick="addproductmini255451form.submit();" title="Add Superdrug Dry Shampoo Chocolate Brownie 150ml to basket">Add to basket</a></div>
        </div>
        </form>
     
     
    
    
    
</div>
</li>
  

	<li class="details detail416558 p416558 csuperdrugownbrand chair-shampoos cnwoffhairb chair-dryshampoo cnwoffhair">
    <div class="image"> 
    
        <a href="http://www.superdrug.com/superdrug/superdrug-dry-shampoo-spirit-of-the-carnival/invt/416558" title="Superdrug Dry Shampoo Spirit of the Carnival"><img src="http://www.superdrug.com/content/ebiz/superdrug/invt/416558/416558_m.jpg" name=medium alt="Superdrug Dry Shampoo Spirit of the Carnival"></a>
    
    
</div>
<div class="detailswrap">
    <h2><a href="http://www.superdrug.com/superdrug/superdrug-dry-shampoo-spirit-of-the-carnival/invt/416558">Superdrug Dry Shampoo Spirit of the Carnival</a></h2>
    
    <div class="price clearfix">
        <div class="now"><span class="pricename">now</span> <span class="priceno">£1.99</span></div>
         
            
        <div class="unitofmeasure">&#163;1.33 per 100ml</div>
     </div> 
    

    <div class="earnpoint hide">Earn  <span id="earnpoint-416558">1.99</span> Point</div>  
        
            
            
		<div class="promotext"><a href="http://www.superdrug.com/2-for-psx/2-for-ps3-on-selected-superdrug-dry-shampoo/icat/2013e9_sddryshampoo" title="View all 2 for £3 promotion">2 for £3 ></a></div>
            
            <div class="clear"></div>
                
    
    
        <form name="addproductmini416558form" action="http://www.superdrug.com/bin/venda" method="get" id="addproductmini416558form">
            <input type="hidden" name="bsref" value="superdrug">
            <input type="hidden" name="log" value="22">
            <input type="hidden" name="mode" value="add">
            <input type="hidden" name="curpage" value="">
            <input type="hidden" name="next" value="">
            <input type="hidden" name="ex" value="co_disp-shopc">
            <input type="hidden" name="buy" value="416558">
            <input type="hidden" name="invt" value="416558">
            <input type="hidden" name="ivref" value="416558">
            <input type="hidden" name="htxt" value="Ti2Psw8TYxD7dAq9%2FWw2GMRRyAShXwuVG02giHvUgfdJx13dRkd%2F32b42bA4W5kWk%2Bv%2BJ07HZhglNDJm66YpPw%3D%3D">
        <div class="baskettools clearfix">
            <div class="qty"><label for="qty416558">Qty:</label><input name="qty" id="qty416558" type="text" value="1" size="2" maxlength="2"></div>
            <div class="addtobasket"><a href="#" onClick="addproductmini416558form.submit();" title="Add Superdrug Dry Shampoo Spirit of the Carnival to basket">Add to basket</a></div>
        </div>
        </form>
     
     
    
    
    
</div>
</li>
  

	<li class="details detail205029 p205029 csuperdrugownbrand chair-shampoos cnwoffhairb chair-dryshampoo cnwoffhair">
    <div class="image"> 
    
        <a href="http://www.superdrug.com/superdrug/superdrug-dry-shampoo-away-with-the-fairies-150ml/invt/205029" title="Superdrug Dry Shampoo Away With The Fairies 150ml"><img src="http://www.superdrug.com/content/ebiz/superdrug/invt/205029/205029_m.jpg" name=medium alt="Superdrug Dry Shampoo Away With The Fairies 150ml"></a>
    
    
</div>
<div class="detailswrap">
    <h2><a href="http://www.superdrug.com/superdrug/superdrug-dry-shampoo-away-with-the-fairies-150ml/invt/205029">Superdrug Dry Shampoo Away With The Fairies 150ml</a></h2>
    
    <div class="price clearfix">
        <div class="now"><span class="pricename">now</span> <span class="priceno">£1.99</span></div>
         
            
        <div class="unitofmeasure">&#163;1.33 per 100ml</div>
     </div> 
    

    <div class="earnpoint hide">Earn  <span id="earnpoint-205029">1.99</span> Point</div>  
        
            
            
		<div class="promotext"><a href="http://www.superdrug.com/2-for-psx/2-for-ps3-on-selected-superdrug-dry-shampoo/icat/2013e9_sddryshampoo" title="View all 2 for £3 promotion">2 for £3 ></a></div>
            
            <div class="clear"></div>
                
    
    
        <form name="addproductmini205029form" action="http://www.superdrug.com/bin/venda" method="get" id="addproductmini205029form">
            <input type="hidden" name="bsref" value="superdrug">
            <input type="hidden" name="log" value="22">
            <input type="hidden" name="mode" value="add">
            <input type="hidden" name="curpage" value="">
            <input type="hidden" name="next" value="">
            <input type="hidden" name="ex" value="co_disp-shopc">
            <input type="hidden" name="buy" value="205029">
            <input type="hidden" name="invt" value="205029">
            <input type="hidden" name="ivref" value="205029">
            <input type="hidden" name="htxt" value="IUCd5bp91gHAtDip%2FpHbT65vIBxn8ZwoXo9vbyzqq6eguQjbwUzCOnlIUB1Ev1k3kRPRWrKNINvkrv7Vea5g1w%3D%3D">
        <div class="baskettools clearfix">
            <div class="qty"><label for="qty205029">Qty:</label><input name="qty" id="qty205029" type="text" value="1" size="2" maxlength="2"></div>
            <div class="addtobasket"><a href="#" onClick="addproductmini205029form.submit();" title="Add Superdrug Dry Shampoo Away With The Fairies 150ml to basket">Add to basket</a></div>
        </div>
        </form>
     

     
    
    
    
</div>
</li>
  

	<li class="details detail297953 p297953 cloreal chair-conditioners c c c">
    <div class="image"> 
    
        <a href="http://www.superdrug.com/loreal/loreal-triple-resist-conditioner-400ml/invt/297953" title="L&#39;Oreal Triple Resist Conditioner 400ml"><img src="http://www.superdrug.com/content/ebiz/superdrug/invt/297953/297953_m.jpg" name=medium alt="L&#39;Oreal Triple Resist Conditioner 400ml"></a>
    
    
</div>
<div class="detailswrap">
    <h2><a href="http://www.superdrug.com/loreal/loreal-triple-resist-conditioner-400ml/invt/297953">L&#39;Oreal Triple Resist Conditioner 400ml</a></h2>
    
    <div class="price clearfix">
        <div class="now"><span class="pricename">now</span> <span class="priceno">£1.97</span></div>
        <div class="save"><span class="savename">save</span> <span class="saveprice">£2.02</span></div> 
        <div class="was"><span class="wasname">was</span> <span class="wasprice">£3.99</span></div>    
        <div class="unitofmeasure">49p per 100ml</div>
     </div> 
    

    <div class="earnpoint hide">Earn  <span id="earnpoint-297953">1.97</span> Point</div>  
        
            
            
		
            
            <div class="clear"></div>
                
    
    
        <form name="addproductmini297953form" action="http://www.superdrug.com/bin/venda" method="get" id="addproductmini297953form">
            <input type="hidden" name="bsref" value="superdrug">
            <input type="hidden" name="log" value="22">
            <input type="hidden" name="mode" value="add">
            <input type="hidden" name="curpage" value="">
            <input type="hidden" name="next" value="">
            <input type="hidden" name="ex" value="co_disp-shopc">
            <input type="hidden" name="buy" value="297953">
            <input type="hidden" name="invt" value="297953">
            <input type="hidden" name="ivref" value="297953">
            <input type="hidden" name="htxt" value="uuJoJ6%2B8AD%2BmNuzV2nq1AhkOoBqXUo6k4XsYWouImnFVSlUR6QAY3rkv%2FVRtNwT6bzx2P3RGE5FzYX%2FJwK5jTA%3D%3D">
        <div class="baskettools clearfix">
            <div class="qty"><label for="qty297953">Qty:</label><input name="qty" id="qty297953" type="text" value="1" size="2" maxlength="2"></div>
            <div class="addtobasket"><a href="#" onClick="addproductmini297953form.submit();" title="Add L&#39;Oreal Triple Resist Conditioner 400ml to basket">Add to basket</a></div>
        </div>
        </form>
     
     
    
    
    
</div>
</li>
  
</ul>





		


</div>

 </div>

</div>
<div id="colone">
<div class="categorynavigation">
  <ul>
    <li class="navhair"><a href="http://www.superdrug.com/hair/icat/hair" title="Hair"><span><?php echo $cat->getCatName(); ?></span></a>
      <ul>
  
  <?php
  
  $sub_cat_data= $cat->getSubCategory();
  if($sub_cat_data != NULL)
  {
	  foreach($sub_cat_data as $sub_cat_info)
	  {
  
  ?>      

 <li class="nav-hair-shampoos"><a href="http://www.superdrug.com/hair/shampoos/icat/hair-shampoos" title="Shampoos"><?php echo $sub_cat_info['sub_category_name']; ?></a></li>

<!--

 <li class="nav-hair-conditioners"><a href="http://www.superdrug.com/hair/conditioners/icat/hair-conditioners" title="Conditioners">Conditioners</a></li>

 <li class="nav-hair-colourants"><a href="http://www.superdrug.com/hair/hair-colourants/icat/hair-colourants" title="Hair Colourants">Hair Colourants</a></li>

 <li class="nav-hair-styling"><a href="http://www.superdrug.com/hair/hair-styling/icat/hair-styling" title="Hair Styling">Hair Styling</a></li>

 <li class="nav-hair-professional"><a href="http://www.superdrug.com/hair/professional-hair/icat/hair-professional" title="Professional Hair">Professional Hair</a></li>

 <li class="nav-hair-treatments"><a href="http://www.superdrug.com/hair/treatments/icat/hair-treatments" title="Treatments">Treatments</a></li>

 <li class="nav-hair-2in1"><a href="http://www.superdrug.com/hair/2-in-1/icat/hair-2in1" title="2 in 1">2 in 1</a></li>

 <li class="nav-hair-kids"><a href="http://www.superdrug.com/hair/kids/icat/hair-kids" title="Kids">Kids</a></li>

 <li class="nav-hair-hairloss"><a href="http://www.superdrug.com/hair/hair-loss-solutions/icat/hair-hairloss" title="Hair Loss Solutions">Hair Loss Solutions</a></li>

 <li class="nav-hair-electricals"><a href="http://www.superdrug.com/hair/electricals/icat/hair-electricals" title="Electricals">Electricals</a></li>

     -->
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


    <ul class="promotions"> 
        
<li class="prolist1 freedeliveryover25 first">
        <a title="FREE DELIVERY on orders over £25 - Standard &pound;3 - Next day: &pound;5.50" href="http://www.superdrug.com/help+info/delivery-information/page/deliveryinfo"> 
         
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
 
    </ul>
 
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
