<!--GETTING BACKGROUND IMAGE-->
<?php
  	        	
      include('connection.php');
	  
	  $sql=mysql_query("SELECT * FROM background_image LIMIT 1");
	  while($data= mysql_fetch_array($sql))
	  {
	       $pic_url= 'control_panel/'.$data['pic_url'];
	  }
	  
		   
      
?>
<!-- END OF GETTING BACKGROUND IMAGE-->
<style>
body {
background-image:url('<?php echo $pic_url; ?>'); background-repeat:no-repeat;background-attachment:fixed;background-position:center top;background-color:#000;
}


/*
.catmakeup
{
  background: #333;
}
*/
</style>


<script>

$( document ).ready(function() {
	var cat_id = <?php echo $_REQUEST['cat_id']; ?>  ;
	var id ;
	
	if(cat_id== 1)
	{
		id = "makeup";
	}
	else if(cat_id== 2)
	{
		id = "skin";
	}
	else if(cat_id== 3)
	{
		id = "fragrance";
	}
	else if(cat_id== 4)
	{
		id = "hair";
	}
	else if(cat_id== 5)
	{
		id = "toiletries";
	}
	else if(cat_id== 6)
	{
		id = "mens";
	}
	else if(cat_id== 7)
	{
		id = "baby";
	}
	else if(cat_id== 8)
	{
		id = "electricals";
	}
	else if(cat_id== 9)
	{
		id = "health";
	}
	else if(cat_id== 10)
	{
		id = "garments";
	}
	
    document.getElementById(id).style.backgroundColor="#333";
	
});


</script>

<div id="mainNav-wrapper-2012">
<style>
ul.subCatNav li.gifts a {
  background: yellow;
  color: red!important;
  padding: 0!important;
  margin: 0 0 10px 0;
}
#mainNav-2012 li a {
padding: 8px 12px 0 12px!important;
}

</style>


<?php
include('submenu.php');
?>


<div id="mainNav-wrapper-2012">
  <ul class="mainNav clearfix" id="mainNav-2012">
    <li class="first catlist"><a class="parenthomelink" href="index.php" title="UK-Cosmetics Home">Home</a></li>
    
    
    
    
<!--START MAKEUP-->    
    
    <li id="makeup" class="catmakeup catlist catlistno1"><a class="parentone" href="category_page.php?cat_id=1" title="Make Up">Make Up</a>

<?php
$makeup = new SubMenu(1);
?>
    
    
      <div class="subNav-2012 snmakeup catno clearfix">
        <div class="subNavWrap-2012">
          <div class="shopbycat scatlist btnavbigred">
            <h3>Shop by Category</h3>
            <ul class="subNav">
            
            <?php
            $sub_category = $makeup->getSubcategory();
			if($sub_category != NULL)
			{
			foreach($sub_category as $sub_data)
			{
			?>
            
              <li class="submu-face subitem"><a class="parenttwo" href="category_product.php?sub_category_id=<?php echo $sub_data['sub_category_id']; ?>" title="Accessories"><?php echo $sub_data['sub_category_name'];?></a></li>
  
			<?php
			}
			}
			?>

            </ul>
          </div>
          <div class="shopbybrand scatlist">
            <h3>Top Make Up Brands</h3>
            
            <?php
			
			$brand = $makeup->getBrand();
			
			?>
            
            <ul class="subNavlist">
            <?php
			if($brand != NULL)
			{
            foreach($brand as $brand_data)
				{
			?>
              <li><a href="category_product.php?sub_category_id=<?php echo $sub_data['sub_category_id']; ?>&brand_id=<?php echo $brand_data['brand_id']; ?>" title="Rimmel"> <?php echo $brand_data['brand_name']; ?> </a></li>
             
           
            
            <?php
				}
			}
			?>
            
            
            </ul>
          </div>
          <!-- dynamic top offers -->
          

  <div class="shopbypromo scatlist scatlistlast">
    <h3>Top Offers </h3>
    
    <?php
	$offers = $makeup->offers();
	?>
    
    <ul class="subCatNav clearfix">
    
      <?php
	  if($offers != NULL)
	  {
            foreach($offers as $offers_data)
				{
	  ?>  

  <li class="2013e9_revlon"><a href="view_product.php?product_id=<?php echo $offers_data['product_id'] ?>" title="<?php echo $offers_data['product_name']; ?>">
    <?php echo $offers_data['product_name']; ?>
    </a></li>
    
    <?php
		}
	  }
	?>

    </ul>
    <div class="clear"></div>
    <a href="" class="valink" title="View all offers"> View all offers</a>
</div>

        </div>
      </div>
    </li>
<!-- END MAKEUP -->










<!-- SKIN -->
    <li id="skin" class="catskincare catlist catlistno2"><a class="parentone" href="category_page.php?cat_id=2" title="Skin">Skin</a>
    <?php
	$skin = new SubMenu(2);
	?>
    
    
    
      <div class="subNav-2012 snskincare catno clearfix">
        <div class="subNavWrap-2012">
          <div class="shopbycat scatlist btnavbigred">
            <h3>Shop by Category</h3>
            <?php
			$sub_category= $skin->getSubcategory();
			if($sub_category != NULL)
			{
			foreach ($sub_category as $sub_data1)
			{
			?>
            
            
            
            <ul class="subNav">
              <li class="subsk-face subitem1"><a class="parenttwo" href="category_product.php?sub_category_id=<?php echo $sub_data1['sub_category_id'];?>" title="Body"><?php echo $sub_data1['sub_category_name']; ?></a></li>
              
              <?php 
			  }
			}
			  ?>
              
              
  
            </ul>
          </div>
          <div class="shopbybrand scatlist">
            <h3>Top Skin Care Brands</h3>
            <?php
			$brand1 = $skin->getBrand();
			
			?>
            
            
            
            
            
            
            <ul class="subNavlist">
           <?php
		   if($brand1 != NULL)
			{
            foreach($brand1 as $brand_data1)
				{
			?>
            
            
            <li><a href="category_product.php?sub_category_id=<?php echo $sub_data1['sub_category_id']; ?>&brand_id=<?php echo $brand_data1['brand_id'];?>" title="St Tropez brandshop"><?php echo $brand_data1['brand_name']; ?></a></li>
            
            
            <?php
			}
			}
				
			?>
            
            </ul>
          </div>
          <!-- dynamic top offers -->
          

  <div class="shopbypromo scatlist scatlistlast">
    <h3>Top Offers </h3>
    <?php
	$offers1 = $skin->offers();
	?>
    
    <ul class="subCatNav clearfix">
    <?php 
	 if($offers1 != NULL)
			{
	foreach($offers1 as $offers_data1)
	{
	
	?>
      

  <li class="manuka_2013e9"><a href="view_product.php?product_id=<?php echo $offers_data1['product_id']; ?>" title="Save 1/3 on selected Manuka Doctor">
   <?php echo $offers_data1['product_name']; ?>
    </a></li>
    
    <?php
	}
			}
	?>



 

    </ul>
    <div class="clear"></div>
    <a href="http://www.superdrug.com/icat/nwoffersskincare" class="valink" title="View all offers"> View all offers</a>
</div>

        </div>
      </div>
    </li>
<!-- END SKINCARE -->





<!-- START FRAGRANCE -->
 <li id="fragrance" class="catfragrance catlist catlistno3"><a class="parentone" href="category_page.php?cat_id=3" title="Fragrance">Fragrance</a>
       <?php 
	    
		$fragrance = new SubMenu(3);
	   
	   ?>
 
 
      <div class="subNav-2012 snfragrance catno clearfix">
        <div class="subNavWrap-2012">
          <div class="shopbycat scatlist btnavbigred">
            <h3>Shop by Category</h3>
            <?php 
			$fragrance_sub_category = $fragrance->getSubcategory();
			foreach( $fragrance_sub_category as $sub_data2 )
			{
				
			
			
			?>
            
            
            <ul class="subNav">
              <li class="subf_new subitem1"><a class="parenttwo" href="category_product.php?sub_category_id=<?php echo $sub_data2['sub_category_id']; ?>" title="Fragrance For Her"> <?php echo $sub_data2['sub_category_name']; ?> </a></li>
              
              <?php
			}
			  ?>
              
                 
            </ul>
          </div>
          <div class="shopbybrand scatlist">
            <h3>Top Fragrance Brands</h3>
            <?php
			$fragrance_brand = $fragrance->getBrand();
			?>
            
            
            
            
            
            
            
            <ul class="subNavlist">
            <?php
			foreach($fragrance_brand as $brand_data2)
			{
			?>
            
            <li><a href="category_product.php?sub_category_id=<?php echo $sub_data2['sub_category_id']; ?>&brand_id=<?php echo $brand_data2['brand_id']; ?>" title="Agent Provocateur"><?php echo $brand_data2['brand_name']; ?></a></li> 
             <?php
              }
			  ?>
            </ul>
          </div>
          <!-- dynamic top offers -->
          

  <div class="shopbypromo scatlist scatlistlast">
    <h3>Top Offers </h3>
    <?php
	$fragrance_offers = $fragrance->offers();
	?>
    
    
    <ul class="subCatNav clearfix">
      <?php 
	  if($fragrance_offers !=NULL)
	  {
			foreach($fragrance_offers as $offers_data2)
			    {
			
	?>
      
  <li class="met-wk33-frag"><a href="view_product.php?product_id=<?php echo $offers_data2['product_id'] ;?>" title="1/2 Price on selected Fragrances - Must end Tuesday">
    <?php  echo $offers_data2['product_name'];?>
    </a></li>
    
    
    <?php
	  }
	  }
	 
	?>


    </ul>
    <div class="clear"></div>
    <a href="" class="valink" title="View all offers"> View all offers</a>
</div>

        </div>
      </div>
    </li>
<!-- END FRAGRANCE -->



 <!-- HAIR -->
    <li id="hair" class="cathair catlist catlistno7"><a class="parentone" href="category_page.php?cat_id=4" title="Hair">Hair</a>
    <?php 
	$hair = new SubMenu(4);
	?>
    
    
    
      <div class="subNav-2012 snhair catno clearfix">
        <div class="subNavWrap-2012">
          <div class="shopbycat scatlist btnavbigred">
            <h3>Shop by Category</h3>
            <?php
			 $hair_sub_category = $hair->getSubcategory();
			 foreach($hair_sub_category as $sub_data3)
			 {
			
			
			?>
            
            
            
            
            <ul class="subNav">
              <li class="subhr-hairshampoos subitem11"><a class="parenttwo" href="category_product.php?sub_category_id=<?php echo $sub_data3['sub_category_id']; ?>" title="<?php $sub_data3['sub_category_name']; ?>"> <?php echo $sub_data3['sub_category_name']; ?> </a></li>
              <?php 
			 }
			  ?>
              
            </ul>
          </div>
          <div class="shopbybrand scatlist">
            <h3>Top Hair Brands</h3>
            <?php 
			$hair_brand = $hair->getBrand();
			?>
            
            
            
            <ul class="subNavlist">
            <?php 
			if($hair_brand != NULL)
			{
				foreach($hair_brand as $hair_data)
			      {
			
			
			
			?>
            
            
            
              <li><a href="category_product.php?sub_category_id=<?php echo $sub_data3['sub_category_id']; ?>&brand_id=<?php echo $hair_data['brand_id']; ?>" title="John Frieda"> <?php echo $hair_data['brand_name']; ?> </a></li>
              
              
              
              <?php 
				  }
			}
			  ?>
              
              
              
            </ul>
          </div>
          <!-- dynamic top offers -->
          

  <div class="shopbypromo scatlist scatlistlast">
    <h3>Top Offers </h3>
    <?php 
	$hair_offers = $hair->offers();
	?>
    
    
    <ul class="subCatNav clearfix">
    <?php
	if($hair_offers !=NULL)
	   {
		   foreach($hair_offers as $hair_data)
		   {
			   
	
	?>
      

  <li class="lorealexc_2013e9"><a href="view_product.php?product_id=<?php echo $hair_data['product_id']; ?>" title="<?php echo $hair_data['product_name']; ?>">
<?php echo $hair_data['product_name']; ?>
    </a></li>
    <?php 
	   }
	   }
	?>

    </ul>
    <div class="clear"></div>
    <a href="" class="valink" title="View all offers"> View all offers</a>
</div>

        </div>
      </div>
    </li>
    <!-- END HAIR --> 
    
    
    
    
<!-- TOILETRIES -->
    
    <li id="toiletries" class="cattoiletries catlist catlistno4"><a class="parentone" href="category_page.php?cat_id=5" title="Toiletries">Toiletries</a>
    
     <?php 
			$Toiletries = new SubMenu(5);
			
			
			?>
      <div class="subNav-2012 sntoiletries catno clearfix">
        <div class="subNavWrap-2012">
          <div class="shopbycat scatlist btnavbigred">
            <h3>Shop by Category</h3>
            <?php 
			$Toiletries_sub_category = $Toiletries->getSubcategory();
			if($Toiletries_sub_category != NULL)
			 {
				 foreach($Toiletries_sub_category as $Toiletries_data)
				 {
			
			
			?>
            <ul class="subNav">
              <li class="subto-accessories subitem1"><a class="parenttwo" href="category_product.php?sub_category_id=<?php echo $Toiletries_data['sub_category_id']; ?>" title="Dental"><?php echo $Toiletries_data['sub_category_name']; ?></a></li>
              <?php 
				 }
			 }
			  
			  ?>
              
            </ul>
          </div>
          <div class="shopbybrand scatlist">
            <h3>Top Toiletries Brands</h3>
            <?php
			$Toiletries_brand = $Toiletries->getBrand();
			?>
            <ul class="subNavlist">
            <?php
			if($Toiletries_brand != NULL)
			{
				foreach($Toiletries_brand as $Toiletries_b_info)
				{
					
			
			
			
			 ?>
              <li><a href="category_product.php?sub_category_id=<?php echo $Toiletries_data['sub_category_id']; ?>&brand_id=<?php echo $Toiletries_b_info['brand_id']; ?>" title="Oral B"><?php echo $Toiletries_b_info['brand_name'];?> </a></li>
              <?php 
				}
			}
              ?>
              
    
            </ul>
          </div>
          
          <!-- dynamic top offers -->
          

  <div class="shopbypromo scatlist scatlistlast">
    <h3>Top Offers </h3>
    <?php
	$Toiletries_offer = $Toiletries->offers();
	?>
    
    <ul class="subCatNav clearfix">
    <?php
	if($Toiletries_offer != NULL)
	{
		foreach($Toiletries_offer as $Toiletries_data)
		{
			
    ?>
      

  <li class="radox_2013e9"><a href="view_product.php?product_id=<?php echo $Toiletries_data['product_id']; ?>" title="<?php echo $Toiletries_data['product_name'];?>">
 <?php echo $Toiletries_data['product_name'];?>
    </a></li>
      <?php
		}
	}
	  
	  ?>




    </ul>
    <div class="clear"></div>
    <a href="" class="valink" title="View all offers"> View all offers</a>
</div>

        </div>
      </div>
    </li>
    <!-- END TOILETRIES --> 
    
    
    
 <!-- START MENS -->
    <li id="mens" class="catmens catlist catlistno5"><a class="parentone" href="category_page.php?cat_id=6" title="Mens">Mens</a>
    <?php 
	$men = new SubMenu(6);
	?>
    
      <div class="subNav-2012 snmens catno clearfix">
        <div class="subNavWrap-2012">
          <div class="shopbycat scatlist btnavbigred">
            <h3>Shop by Category</h3>
            <?php
			$men_sub_category = $men->getSubcategory();
			if($men_sub_category != NULL)
			{
				foreach($men_sub_category as $men_data)
				{
			?>
            <ul class="subNav">
              <li class="subme-accessories subitem1"><a class="parenttwo" href="category_product.php?sub_category_id=<?php echo $men_data['sub_category_id']; ?>" title="Accessories"><?php echo $men_data['sub_category_name'];?></a></li>
              <?php
				}
			}
				  
			  ?>
             
                </ul>
          </div>
          <div class="shopbybrand scatlist">
            <h3>Top Mens Brands</h3>
            <?php 
			$men_brand = $men->getBrand();
			?>
            
            
            
            <ul class="subNavlist">
            <?php 
			if($men_brand != NULL)
			{
				foreach($men_brand as $men_info)
				{
			?>
            
            
            
            
              <li><a href="category_product.php?sub_category_id=<?php echo $men_data['sub_category_id']; ?>&brand_id=<?php echo $men_info['brand_id']; ?>" title="Gillette"> <?php echo $men_info['brand_name'];?> </a></li>
              <?php 
				}
			}
              ?>
     
            </ul>
          </div>
          
          <!-- dynamic top offers -->
          
          
           <div class="shopbypromo scatlist scatlistlast">
    <h3>Top Offers </h3>
    <?php
	$mens_offer = $men->offers();
	?>
    
    <ul class="subCatNav clearfix">
    <?php
	if($mens_offer != NULL)
	{
		foreach($mens_offer as $men_offer_data)
		{
			
    ?>
      

  <li class="radox_2013e9"><a href="view_product.php?product_id=<?php echo $men_offer_data['product_id']; ?>" title="<?php echo $men_offer_data['product_name'];?>">
 <?php echo $men_offer_data['product_name'];?>
    </a></li>
      <?php
		}
	}
	  
	  ?>




    </ul>
    <div class="clear"></div>
    <a href="" class="valink" title="View all offers"> View all offers</a>
</div>

          

        </div>
      </div>
    </li>
    <!-- END MENS -->
    
    
    
    
<!-- BABY -->
    <li id="baby" class="catbaby catlist catlistno4"><a class="parentone" href="category_page.php?cat_id=7" title="Baby">Baby</a>
    <?php 
	$baby = new SubMenu(7);
	?>
      <div class="subNav-2012 sntoiletries catno clearfix">
        <div class="subNavWrap-2012">
          <div class="shopbycat scatlist btnavbigred">
            <h3>Shop by Category</h3>
            <?php
			$baby_sub_category = $baby->getSubcategory();
			if($baby_sub_category != NULL)
				{
					foreach($baby_sub_category as $baby_data)
					{
						
				
			?>
            
            
            
            
            <ul class="subNav">
              <li class="subto-accessories subitem1"><a class="parenttwo" href="category_product.php?sub_category_id=<?php echo $baby_data['sub_category_id']; ?>"><?php echo $baby_data['sub_category_name'];?></a></li>
              <?php
					}
				}
			  ?>


            </ul>
          </div>
          <div class="shopbybrand scatlist">
            <h3>Top Baby Brands</h3>
            <?php 
			$baby_brand = $baby->getBrand();
			?>
            
            
            
            <ul class="subNavlist">
            <?php
			if($baby_brand != NULL)
			{
				foreach($baby_brand as $baby_info)
				{
			?>
           
              <li><a href="category_product.php?sub_category_id=<?php echo $baby_data['sub_category_id']; ?>&brand_id=<?php echo $baby_info['brand_id']; ?>" title="Superdrug"><?php echo $baby_info['brand_name'];?></a></li>
              <?php
				}
			}
			  ?>
  
            </ul>
          </div>
          <!-- dynamic top offers -->
          

  <div class="shopbypromo scatlist scatlistlast">
    <h3>Top Offers </h3>
    <?php 
	$baby_offer = $baby->offers();
	?>
    <ul class="subCatNav clearfix">
    <?php
	if($baby_offer != NULL)
	{
	   foreach($baby_offer as $baby_data)
	   {
		   
	?>
      

  <li class="pamperssensitive_2013e9"><a href="view_product.php?product_id=<?php echo $baby_data['product_id']; ?>" title="<?php echo $baby_data['product_name']; ?>">
  <?php echo $baby_data['product_name']; ?>
    </a></li>
    <?php 
	   }
	}
	
	?>



    </ul>
    <div class="clear"></div>
    <a href="" class="valink" title="View all offers"> View all offers</a>
</div>

        </div>
      </div>
    </li>
    <!-- END BABY --> 
    
    
  
<!-- ELECTRICALS -->
    
    <li id="electricals" class="catbaby catlist catlistno4"><a class="parentone" href="category_page.php?cat_id=8" title="Electricals">Electricals</a>
    <?php 
	$Electricals = new SubMenu(8);
	?>
      <div class="subNav-2012 snelectricals catno clearfix">
        <div class="subNavWrap-2012">
          <div class="shopbycat scatlist btnavbigred">
            <h3>Shop by Category</h3>
            <?php 
			$Electricals_sub_category = $Electricals->getSubcategory();
			if($Electricals_sub_category != NULL)
			{
				foreach($Electricals_sub_category as $Electricals_data)
				{
					
			
			
			?>
          
            <ul class="subNav">

              <li class="subel-toothbrushes subitem8"><a class="parenttwo" href="category_product.php?sub_category_id=<?php echo $Electricals_data['sub_category_id']; ?>" title="Toothbrushes"><?php echo $Electricals_data['sub_category_name']; ?></a> </li>
              <?php 
				}
			}
			  ?>

            </ul>
            <div class="clear"></div>
          </div>
          <div class="shopbybrand scatlist">
            
            <h3>Top Electricals Brands</h3>
            <?php
			$Electricals_brand = $Electricals->getBrand();
			?>
            
            
            
            <ul class="subNavlist">
            <?php 
			if($Electricals_brand != NULL)
			{
				foreach($Electricals_brand as $Electricals_info)
				{
					
			?>
            
              <li><a href="category_product.php?sub_category_id=<?php echo $Electricals_data['sub_category_id']; ?>&brand_id=<?php echo $Electricals_info['brand_id']; ?>" title="Babyliss"> <?php echo $Electricals_info['brand_name']; ?> </a></li>
              <?php
				}
			}
			
              ?>
          
            </ul>
          </div>
          <!-- dynamic top offers -->
          

  <div class="shopbypromo scatlist scatlistlast">
   <h3>Top Offers </h3>
    <?php 
	$Electricals_offers = $Electricals->offers();
	
	?>
    <ul class="subCatNav clearfix">
    <?php
	if($Electricals_offers != NULL)
	{
		foreach($Electricals_offers as $Electricals_data)
		{
	?>
      

  <li class="elec-sale"><a href="view_product.php?product_id=<?php echo $Electricals_data['product_id']; ?>" title="<?php echo $Electricals_data['product_name'];?>">
    <?php echo $Electricals_data['product_name'];?>
    </a></li>
    <?php 
		}
	}
	?>





    </ul>
    <div class="clear"></div>
    <a href="" class="valink" title="View all offers"> View all offers</a>
</div>

        </div>
      </div>
    </li>
    <!-- END ELECTRICALS --> 
    
    
 <!-- START HEALTH -->
    <li id="health" class="cathealth catlist catlistno8"><a class="parentone" href="category_page.php?cat_id=9" title="Health">Health</a>
    
    <?php
	$health = new SubMenu(9);
	?>
      <div class="subNav-2012 snhealth catno clearfix">
        <div class="subNavWrap-2012">
          <div class="shopbycat scatlist btnavbigred">
            <h3>Shop by Category</h3>
            <?php
			$health_sub_category = $health->getSubcategory();
			if($health_sub_category != NULL)
			{
				foreach($health_sub_category as $health_data)
				{
					
			?>
            
            
            <ul class="subNav">
               <li class="subhe-lifestyle subitem10"><a class="parenttwo" href="category_product.php?sub_category_id=<?php echo $health_data['sub_category_id']; ?>" title="Healthy Lifestyle"><?php echo $health_data['sub_category_name'];?></a> </li>
               <?php
				}
			}
			
			   ?>
               
               

            </ul>
          </div>
          <div class="shopbybrand scatlist">
            <h3>Top Health Brands</h3>
            <?php $health_brand = $health->getBrand();
			 ?>
            <ul class="subNavlist">
            <?php
			if($health_brand != NULL)
			{
				foreach($health_brand as $health_info)
				{
			?>
              <li><a href="category_product.php?sub_category_id=<?php echo $health_data['sub_category_id']; ?>&brand_id=<?php echo $health_info['brand_id']; ?>" title="Celebrity Slim"> <?php $health_info['brand_name'];?> </a></li>
              
              <?php
				}
			}
              ?>
             
            </ul>
          </div>
          
          <!-- dynamic top offers -->
          

  <div class="shopbypromo scatlist scatlistlast">
    <h3>Top Offers </h3>
    <?php
	$health_offer = $health->offers();
	?>
    
    
    <ul class="subCatNav clearfix">
      <?php 
	  if($health_offer !=NULL)
	  {
		  foreach($health_offer as $health_data)
		  {

	  ?>

  <li class="2013e9_sdslenderplan"><a href="view_product.php?product_id=<?php echo $health_data['product_id']; ?>" title="<?php echo $health_data['product_name']; ?>">
   <?php echo $health_data['product_name']; ?>
    </a></li>
    <?php 
		  }
	  }
	?>



    </ul>
    <div class="clear"></div>
    <a href="" class="valink" title="View all offers"> View all offers</a>
</div>

        </div>
      </div>
    </li>
    <!-- END HEALTH --> 
    
    

<!--START GARMENTS-->
  
<!--  id="health" class="cathealth catlist catlistno8-->
    
<li id="garments" class="cathealth catlist catlistno10"><a class="parentone" href="category_page.php?cat_id=10" title="Clothing">Clothing</a>



  <?php
	$garments = new SubMenu(10);
	?>
      <div class="subNav-2012 snhealth catno clearfix">
        <div class="subNavWrap-2012">
          <div class="shopbycat scatlist btnavbigred">
            <h3>Shop by Category</h3>
            <?php
			$garments_sub_category = $garments->getSubcategory();
			if($garments_sub_category != NULL)
			{
				foreach($garments_sub_category as $garments_data)
				{
					
			?>
            
            
            <ul class="subNav">
               <li class="subhe-lifestyle subitem10"><a class="parenttwo" href="category_product.php?sub_category_id=<?php echo $garments_data['sub_category_id']; ?>" title="Healthy Lifestyle"><?php echo $garments_data['sub_category_name'];?></a> </li>
               <?php
				}
			}
			
			   ?>
               
               

            </ul>
          </div>
          <div class="shopbybrand scatlist">
            <h3>Top Garments Brands</h3>
            <?php $garments_brand = $garments->getBrand();
			 ?>
            <ul class="subNavlist">
            <?php
			if($garments_brand != NULL)
			{
				foreach($garments_brand as $garments_info)
				{
			?>
              <li><a href="category_product.php?sub_category_id=<?php echo $garments_info['sub_category_id']; ?>&brand_id=<?php echo $garments_info['brand_id']; ?>" title="Celebrity Slim"> <?php $garments_info['brand_name'];?> </a></li>
              
              <?php
				}
			}
              ?>
             
            </ul>
          </div>
          
          <!-- dynamic top 
           -->
          

  <div class="shopbypromo scatlist scatlistlast">
    <h3>Top Offers </h3>
    <?php
	$garments_offer = $garments->offers();
	?>
    
    
    <ul class="subCatNav clearfix">
      <?php 
	  if($garments_offer !=NULL)
	  {
		  foreach($garments_offer as $garments_data)
		  {

	  ?>

  <li class="2013e9_sdslenderplan"><a href="view_product.php?product_id=<?php echo $garments_data['product_id']; ?>" title="<?php echo $garments_data['product_name']; ?>">
   <?php echo $garments_data['product_name']; ?>
    </a></li>
    <?php 
		  }
	  }
	?>



    </ul>
    <div class="clear"></div>
    <a href="" class="valink" title="View all offers"> View all offers</a>
</div>

        </div>
      </div>





</li>

<!-- END GARMENTS-->    
    
 
<!--START FOOD-->
   
<li class="catlist catlistno11" style=""><a class="parentone"  href="category_page.php?cat_id=11" title="Chocolate Items">Chocolate</a>




  <?php
	$food = new SubMenu(11);
	?>
      <div class="subNav-2012 snhealth catno clearfix">
        <div class="subNavWrap-2012">
          <div class="shopbycat scatlist btnavbigred">
            <h3>Shop by Category</h3>
            <?php
			$food_sub_category = $food->getSubcategory();
			if($food_sub_category != NULL)
			{
				foreach($food_sub_category as $food_data)
				{
					
			?>
            
            
            <ul class="subNav">
               <li class="subhe-lifestyle subitem10"><a class="parenttwo" href="category_product.php?sub_category_id=<?php echo $food_data['sub_category_id']; ?>" title="Healthy Lifestyle"><?php echo $food_data['sub_category_name'];?></a> </li>
               <?php
				}
			}
			
			   ?>
               
               

            </ul>
          </div>
          <div class="shopbybrand scatlist">
            <h3>Top Food Brands</h3>
            <?php $food_brand = $food->getBrand();
			 ?>
            <ul class="subNavlist">
            <?php
			if($food_brand != NULL)
			{
				foreach($food_brand as $food_info)
				{
			?>
              <li><a href="category_product.php?sub_category_id=<?php echo $food_info['sub_category_id']; ?>&brand_id=<?php echo $food_info['brand_id']; ?>" title="Celebrity Slim"> <?php $food_info['brand_name'];?> </a></li>
              
              <?php
				}
			}
              ?>
             
            </ul>
          </div>
          
          <!-- dynamic top offers -->
          

  <div class="shopbypromo scatlist scatlistlast">
    <h3>Top Offers </h3>
    <?php
	$food_offer = $food->offers();
	?>
    
    
    <ul class="subCatNav clearfix">
      <?php 
	  if($food_offer !=NULL)
	  {
		  foreach($food_offer as $food_info)
		  {

	  ?>

  <li class="2013e9_sdslenderplan"><a href="view_product.php?product_id=<?php echo $food_info['product_id']; ?>" title="<?php echo $food_info['product_name']; ?>">
   <?php echo $food_info['product_name']; ?>
    </a></li>
    <?php 
		  }
	  }
	?>



    </ul>
    <div class="clear"></div>
    <a href="" class="valink" title="View all offers"> View all offers</a>
</div>

        </div>
      </div>






</li>   

<!--START FOOD--> 
 
   
    
    
<!-- ACCESSORIES -->

    <!-- ACCESSORIES -->
<!-- OFFERS -->
    <li class="catoffers catlist catlistno9"><a class="parentone" href="offers_page.php" title="Offers">Offers</a>
    
    
    <!--
      <div class="subNav-2012 snoffers catno clearfix">

        <div class="subNavWrap-2012" style="right:20px;!important">
          <div class="shopbycat scatlist btnavbigred">
            <h3>Shop by Category</h3>
            <ul class="subNav">
              <li class="subnwoffmakeup subitem1"><a class="parenttwo" href="http://www.superdrug.com/offers/make-up-offers-/icat/nwoffmakeupb" title="Make Up offers ">Make Up offers </a></li>
              <li class="subnwoffskincare subitem2"><a class="parenttwo" href="http://www.superdrug.com/offers/skin-care-offers/icat/nwoffskincareb" title="Skin Care offers">Skin Care offers</a></li>
              <li class="subnwofftoiletries subitem3"><a class="parenttwo" href="http://www.superdrug.com/offers/toiletries-offers/icat/nwofftoiletriesb" title="Toiletries offers">Toiletries offers</a></li>
             
              <li class="subnwoffmens subitem3"><a class="parenttwo" href="http://www.superdrug.com/offers/mens-offers/icat/nwoffmensb" title="Mens offers">Mens offers</a></li>
             
              <li class="subnwoffelectricals subitem4"><a class="parenttwo" href="http://www.superdrug.com/offers/electrical-offers/icat/nwoffelectricalsb" title="Electrical Offers">Electrical Offers</a></li>
              <li class="subnwoffhair subitem5"><a class="parenttwo" href="http://www.superdrug.com/offers/hair-offers/icat/nwoffhairb" title="Hair offers">Hair offers</a></li>
              <li class="subnwoffhealth subitem6"><a class="parenttwo" href="http://www.superdrug.com/offers/health-offers/icat/nwoffhealthb" title="Health offers">Health offers</a></li>
<li class="subnwoffhealth subitem6"><a class="parenttwo" href="http://www.superdrug.com/offers/baby-offers/icat/nwoffbabyb" title="Baby offers">Baby offers</a></li>
<li class="subnwoffhealth subitem6"><a class="parenttwo" href="http://www.superdrug.com/offers/accessories-offers/icat/nwoffaccsb" title="Accessories offers">Accessories offers</a></li>
              <li class="suboffersbytype subitem7"><a class="parenttwo" href="http://www.superdrug.com/offers/offers-by-type/icat/offersbytype" title="Offers by type">Offers by type</a>
                <ul class="subsubNav-2012 clearfix btnav">
                  <li class="subsub2forxoffersb subitem1"><a class="parentthree" href="http://www.superdrug.com/offers/2-for-psx/icat/2forxoffersb" title="2 for BDT x">2 for BDT x</a></li>
                  <li class="subsub3forxoffersb subitem2"><a class="parentthree" href="http://www.superdrug.com/offers/3-for-psx/icat/3forxoffersb" title="3 for BDT x">3 for BDT x</a></li>
                 
                  <li class="subsubbogofoffersb subitem3"><a class="parentthree" href="http://www.superdrug.com/offers/buy-1-get-1-free/icat/bogofoffersb" title="buy 1 get 1 Free">buy 1 get 1 Free</a></li>
                 
                  <li class="subsubbogshpoffersb subitem4"><a class="parentthree" href="http://www.superdrug.com/offers/buy-1-get-the-2nd-12-price/icat/bogshpoffersb" title="Buy 1 get the 2nd 1/2 price">Buy 1 get the 2nd 1/2 price</a></li>
                  <li class="subsub3for2offersb subitem5"><a class="parentthree" href="http://www.superdrug.com/offers/3-for-2/icat/3for2offersb" title="3 for 2">3 for 2</a></li>
                  <li class="subsub4for3offersb subitem5"><a class="parentthree" href="http://www.superdrug.com/offers/4-for-3/icat/4for3offersb" title="4 for 3">4 for 3</a></li>
                  <li class="subsubhpoffersb subitem6"><a class="parentthree" href="http://www.superdrug.com/offers/12-price/icat/hpoffersb" title="1/2 price">1/2 price</a></li>
                  <li class="subsubbhpoffersb subitem7"><a class="parentthree" href="http://www.superdrug.com/offers/better-than-12-price/icat/bhpoffersb" title="better than 1/2 price">better than 1/2 price</a></li>
                  <li class="subsubsaveoffersb subitem8"><a class="parentthree" href="http://www.superdrug.com/offers/other-savings/icat/saveoffersb" title="Other savings">Other savings</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="shopbybrand scatlist">
            <h3>Top Offers Brands</h3>
            <ul class="subNavlist">
              <li><a href="http://www.superdrug.com/search?q=*&categories=offers&brand=Olay" title="Olay"> Olay </a></li>
              <li><a href="http://www.superdrug.com/search?q=*&categories=offers&brand=LOreal" title="LOreal"> LOreal </a></li>
              <li><a href="http://www.superdrug.com/search?q=*&categories=offers&brand=Aussie" title="Aussie"> Aussie </a></li>
              <li><a href="http://www.superdrug.com/search?q=*&categories=offers&brand=Lynx" title="Lynx"> Lynx </a></li>
              <li><a href="http://www.superdrug.com/search?q=*&categories=offers&brand=Philips" title="Philips"> Philips </a></li>
              <li><a href="http://www.superdrug.com/search?q=*&categories=offers&brand=Babyliss" title="Babyliss"> Babyliss </a></li>
              <li><a href="http://www.superdrug.com/search?q=*&categories=offers&brand=Oral+B" title="Oral B"> Oral B </a></li>
              <li><a href="http://www.superdrug.com/search?q=*&categories=offers&brand=Garnier" title="Garnier">Garnier</a></li>
            </ul>
          </div>
          
         
          

  <div class="shopbypromo scatlist scatlistlast">
    <h3>Top Offers </h3>
    <ul class="subCatNav clearfix">
      

  <li class="b-skin_2013e9"><a href="http://www.superdrug.com/other-savings/save-up-to-ps3-on-b-skincare/icat/b-skin_2013e9" title="Save up to BDT 3 on B. Skincare">
    Save up to BDT 3 on B. Skincare
    </a></li>



  <li class="manuka_2013e9"><a href="http://www.superdrug.com/other-savings/save-13-on-selected-manuka-doctor/icat/manuka_2013e9" title="Save 1/3 on selected Manuka Doctor">
    Save 1/3 on selected Manuka Doctor
    </a></li>



  <li class="oralbcoloured_2013e9"><a href="http://www.superdrug.com/better-than-12-price/better-than-12-price-on-selected-oral-b/icat/oralbcoloured_2013e9" title="Better than 1/2 Price on selected Oral B">
    Better than 1/2 Price on selected Oral B
    </a></li>



  <li class="2013e9_slimfast"><a href="http://www.superdrug.com/3-for-2/3-for-2-on-selected-slimfast/icat/2013e9_slimfast" title="3 for 2 on selected Slimfast">
    3 for 2 on selected Slimfast
    </a></li>



  <li class="2013e9_maxfactor"><a href="http://www.superdrug.com/3-for-2/3-for-2-on-selected-max-factor/icat/2013e9_maxfactor" title="3 for 2 on selected Max Factor">
    3 for 2 on selected Max Factor
    </a></li>



  <li class="2013e9_loreal-beauty"><a href="http://www.superdrug.com/3-for-2/3-for-2-on-loreal-beauty/icat/2013e9_loreal-beauty" title="3 for 2 on L'Oreal Beauty">
    3 for 2 on L'Oreal Beauty
    </a></li>



  <li class="gifts"><a href="http://www.superdrug.com/save-up-to-50-on-gifts/icat/gifts" title="Save up to 50% on Gifts">
    Save up to 50% on Gifts
    </a></li>


    </ul>
    <div class="clear"></div>
    <a href="http://www.superdrug.com/icat/nwoffersoffers" class="valink" title="View all offers"> View all offers</a>
</div>

        </div>
      </div>
     
     --> 
      
    </li>

<!-- END OFFERS -->




<!-- START BRANDS -->
   
<!-- END BRANDS -->


<!-- END OF NAVIGATION -->
  </ul>
</div>
<!-- venda_category rec=icat,ref=shop,temp=mainmenu_l1_2012,cacheall=1 -->
</div>