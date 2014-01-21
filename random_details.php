<?php
include('connection.php');


?>

<div id="grid-list-container">
<ul id="grid-list" class="clearfix">
   
   <?php
  $i= 1 ;  
   $random_query = mysql_query("SELECT * FROM random_details ORDER BY position LIMIT 8");
while($random_data = mysql_fetch_array($random_query))
{
	$random_pic_url = 'control_panel/'.$random_data['pic_url'];
	$title = $random_data['title'];
	$sort_details1 = $random_data['sort_details1'];
	$sort_details2 = $random_data['sort_details2'];
	
	$link1 = $random_data['link1'];
	$link2 = $random_data['link2'];
	$position = $random_data['position'];
	 
	$class = 'grid-item-'.$i;  
   ?>
    		
	<li class="<?php echo $class; ?>">
    	<div class="grid-item-box">
			<h2><?php echo $title ?></h2>
            	<div class="grid-item-image">                
                   	<a href="random_details_page.php?position=<?php echo $position; ?>"><img src="<?php echo $random_pic_url; ?>" style="width:216px; height:125px;" name=boximage alt="New make-up range from One Direction"></a> 
                    <a href="random_details_page.php?position=<?php echo $position; ?>"><div class="grid-item-hover"></div></a>                   
                                                       
                 </div>  
                 
                 <div class="grid-item-links">
                 	<ul>
                    	
                    		<li><a href="<?php echo $link1; ?>"><?php echo $sort_details1; ?></a></li>  
                         
                        
                    		<li><a href="<?php echo $link2; ?>"><?php echo $sort_details2; ?></a></li>  
                         
                                            
                    </ul>
                 </div>                                     
         </div>	
    </li>              

<?php
$i++;
}
?>

<!--
	
	<li class="grid-item-1">
    	<div class="grid-item-box">
			<h2>New Boss Jour</h2>
            	<div class="grid-item-image">                
                   	<a href="http://www.superdrug.com/page/e0813nams_bossjour"><img src="http://www.superdrug.com/content/ebiz/superdrug/stry/e0913sdgrid_bossjour/e0813dwgrid_bossjour.jpg" name=boximage alt="New Boss Jour"></a> 
                    <a href="http://www.superdrug.com/page/e0813nams_bossjour"><div class="grid-item-hover"></div></a>                   
                                                       
                 </div>  
                 
                 <div class="grid-item-links">
                 	<ul>
                    	
                    		<li><a href="http://www.superdrug.com/fragrance-and-perfume/celebrity/icat/f_women_celebrity">Shop all Celebrity Fragrance</a></li>  
                         
                        
                    		<li><a href="http://www.superdrug.com/fragrance-and-perfume/icat/fragrance">Shop all Fragrance</a></li>  
                         
                                            
                    </ul>
                 </div>                                     
         </div>	
    </li>              
	
	<li class="grid-item-1">
    	<div class="grid-item-box">
			<h2>Better than 1/2 Price on Oral B Trizone 600 Green</h2>
            	<div class="grid-item-image">                
                   	<a href="http://www.superdrug.com/electrical-toothbrushes/oral-b-trizone-600-green/invt/576758"><img src="http://www.superdrug.com/content/ebiz/superdrug/stry/e0913sdgrid_oralbtri600/e0913sdgrid_oralbtri600.jpg" name=boximage alt="Better than 1/2 Price on Oral B Trizone 600 Green"></a> 
                    <a href="http://www.superdrug.com/electrical-toothbrushes/oral-b-trizone-600-green/invt/576758"><div class="grid-item-hover"></div></a>                   
                                                       
                 </div>  
                 
                 <div class="grid-item-links">
                 	<ul>
                    	
                    		<li><a href="http://www.superdrug.com/a-z-brands/oral-b/icat/oralb">Shop all Oral B</a></li>  
                         
                        
                    		<li><a href="http://www.superdrug.com/electricals/toothbrushes/icat/elec-toothbrushes">Shop all Electrical Toothbrushes</a></li>  
                         
                                            
                    </ul>
                 </div>                                     
         </div>	
    </li>              
	
	<li class="grid-item-1">
    	<div class="grid-item-box">
			<h2>Gillette Value Packs</h2>
            	<div class="grid-item-image">                
                   	<a href="http://www.superdrug.com/gillette-special-packs/icat/gillette_specialpacks"><img src="http://www.superdrug.com/content/ebiz/superdrug/stry/e0713sdgrid_gillette/e0713jhgry_gillette.jpg" name=boximage alt="Gillette Value Packs"></a> 
                    <a href="http://www.superdrug.com/gillette-special-packs/icat/gillette_specialpacks"><div class="grid-item-hover"></div></a>                   
                                                       
                 </div>  
                 
                 <div class="grid-item-links">
                 	<ul>
                    	
                    		<li><a href="http://www.superdrug.com/toiletries/mens-shaving/icat/toil-mensshaving">Shop all Men's shaving</a></li>  
                         
                        
                    		<li><a href="http://www.superdrug.com/a-z-brands/gillette/icat/gillette">Shop all Gillette</a></li>  
                         
                                            
                    </ul>
                 </div>                                     
         </div>	
    </li>              
	
	<li class="grid-item-1">
    	<div class="grid-item-box">
			<h2>1/2 Price on selected Fragrance</h2>
            	<div class="grid-item-image">                
                   	<a href="http://www.superdrug.com/12-price-on-selected-fragrances-must-end-tuesday/icat/met-wk33-frag"><img src="http://www.superdrug.com/content/ebiz/superdrug/stry/e0913sdgrid_wk33hpfrag/e0913sdgrid_wk33hpfrag.jpg" name=boximage alt="1/2 Price on selected Fragrance"></a> 
                    <a href="http://www.superdrug.com/12-price-on-selected-fragrances-must-end-tuesday/icat/met-wk33-frag"><div class="grid-item-hover"></div></a>                   
                                                       
                 </div>  
                 
                 <div class="grid-item-links">
                 	<ul>
                    	
                    		<li><a href="http://www.superdrug.com/fragrance-and-perfume/celebrity/icat/f_women_celebrity">Shop all Celebrity Fragrance</a></li>  
                         
                        
                    		<li><a href="http://www.superdrug.com/fragrance-and-perfume/icat/fragrance">Shop all Fragrance</a></li>  
                         
                                            
                    </ul>
                 </div>                                     
         </div>	
    </li>              
	
	<li class="grid-item-1">
    	<div class="grid-item-box">
			<h2>1/2 Price on Simple Cleansing Wipes</h2>
            	<div class="grid-item-image">                
                   	<a href="http://www.superdrug.com/clearer-skin/simple-cleansing-wipes-x-25/invt/949321"><img src="http://www.superdrug.com/content/ebiz/superdrug/stry/e0913sdgrid_hpsimplewipes/e0913sdgrid_halfpricesimplewipes.jpg" name=boximage alt="1/2 Price on Simple Cleansing Wipes"></a> 
                    <a href="http://www.superdrug.com/clearer-skin/simple-cleansing-wipes-x-25/invt/949321"><div class="grid-item-hover"></div></a>                   
                                                       
                 </div>  
                 
                 <div class="grid-item-links">
                 	<ul>
                    	
                    		<li><a href="http://www.superdrug.com/a-z-brands/simple/icat/simple">Shop all Simple</a></li>  
                         
                        
                    		<li><a href="http://www.superdrug.com/skin-care/face/icat/skin-face">Shop all Facial Skincare</a></li>  
                         
                                            
                    </ul>
                 </div>                                     
         </div>	
    </li>              
	
	<li class="grid-item-1">
    	<div class="grid-item-box">
			<h2>3 for 2 on selected Slim-Fast</h2>
            	<div class="grid-item-image">                
                   	<a href="http://www.superdrug.com/icat/2013e7_slimfast"><img src="http://www.superdrug.com/content/ebiz/superdrug/stry/e0613sdgrid_slimfastbogo/e0913jhgrp_slimfast.png" name=boximage alt="3 for 2 on selected Slim-Fast"></a> 
                    <a href="http://www.superdrug.com/icat/2013e7_slimfast"><div class="grid-item-hover"></div></a>                   
                                                       
                 </div>  
                 
                 <div class="grid-item-links">
                 	<ul>
                    	
                    		<li><a href="http://www.superdrug.com/a-z-brands/slim-fast/icat/slimfast">Shop all Slim-Fast</a></li>  
                         
                        
                    		<li><a href="http://www.superdrug.com/health/icat/health">Shop all Health</a></li>  
                         
                                            
                    </ul>
                 </div>                                     
         </div>	
    </li>              
	
	<li class="grid-item-1">
    	<div class="grid-item-box">
			<h2>Save 1/3 on Manuka Doctor</h2>
            	<div class="grid-item-image">                
                   	<a href="http://www.superdrug.com/events-2013/manuka-doctor/page/e0213jhms_manuka"><img src="http://www.superdrug.com/content/ebiz/superdrug/stry/e0913sdgrid_manuka/e0713jhgrp_manukasavethird.png" name=boximage alt="Save 1/3 on Manuka Doctor"></a> 
                    <a href="http://www.superdrug.com/events-2013/manuka-doctor/page/e0213jhms_manuka"><div class="grid-item-hover"></div></a>                   
                                                       
                 </div>  
                 
                 <div class="grid-item-links">
                 	<ul>
                    	
                    		<li><a href="http://www.superdrug.com/events-2013/manuka-doctor/page/e0213jhms_manuka">Shop all Manuka Doctor</a></li>  
                         
                        
                    		<li><a href="http://www.superdrug.com/skin-care/icat/skincare">Shop all Skincare</a></li>  
                         
                                            
                    </ul>
                 </div>                                     
         </div>	
    </li>              

-->


    </ul>
    
</div>