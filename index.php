<?php //error_reporting(0); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>

LondonCosmeticsBd for Beauty, Health, Skincare, Perfume, Makeup - londoncosmeticsbd


</title>

  
    <link rel="canonical" href="/" />
    <meta name="description" content="LondonCosmeticsBD.com has a great range of Fragrance and Electrical Offers as well as a range of health and beauty products in make-up, skincare, toiletries, perfume, hair, electrical, men's and health products." />
    <meta name="keywords" content="Superdrug.com for Beauty, Health, Make Up, Skin Care, Fragrance, Perfume, Toiletries, Electrical Hair & Mens Offers, Promotions save, 2 for 1, half price, products" />
    
    
    
    


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
<link rel="stylesheet" href="css/slider-2012.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<script type="text/javascript" src="js/full.js"></script>

<script src="js/a29fc34d976d7e5210f052343af2e81e.js?1376886805"></script>
<script type="text/javascript" src="js/slider-2012.js"></script>
<!-- homepage tests project code -->
<script src="js/189271402.js"></script>





</head>
<body id="home">
<a href="#homepage" class="hide">Skip to content</a>
<div id="wrapper">
<!-- start header -->
<div id="header-2012-wrapper" class="clearfix">

<!-- start header -->

<?php  include('header.php'); ?>

<!-- end header -->



<!-- start nav -->
<?php
 include('menu.php');
?>
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
<div class="Lcat_crumbtrail-con"><p class="Lcattree crumbtrail"><span class="treehome">Home</span></p>
</div>
<!-- end of crumbtrail -->


<!-- end header -->
<!-- start homepage -->
<div id="homepage" class="clearfix">
<div id="gold-silver-2012" class="clearfix">
 <div id="goldspot-2012">

<ul id="goldspot-2012-list">
	
   
   <?php 	        	
      include('connection.php');
	  
	  $sql=mysql_query("SELECT * FROM slider_image ORDER BY position");
	  while($data= mysql_fetch_array($sql))
	  {
	       $pic_url= 'control_panel/'.$data['pic_url']
		   
    ?>  
            <li class="gold-spot-wrapper-full">	
                    <a href="" title="">
                        <img src="<?php echo $pic_url; ?>" name=image alt="New Rimmel Scandaleyes Retro Glam">
                        
            
             
            
             
                    </a>
            </li>
            
            
	<?php
	}
	?>	 
            
        

                

</ul>

<script type="text/javascript">$('#goldspot-2012-list').rhinoslider({effect: 'fade',controlsPrevNext: false,autoPlay: true,pauseOnHover: false,showBullets: 'always',showControls: 'always',showTime: 4000,changeBullets: 'before'});</script>
</div> 

<div id="silverspot">
  

    <ul class="promotions"> 
        
<li class="prolist1 e0413mlsp_summershop first">
         
         <?php 
		 include('connection.php');
		 

		 
		 $addver_query = mysql_query("SELECT * FROM advertaisement ORDER BY position");
		 while($addver_data= mysql_fetch_array($addver_query))
				{
				
				$add_pic_url=$addver_data['pic_url'];
			    $code=$addver_data['code'];
				$flash=$addver_data['flash'];					
				$height=$addver_data['height'];
				$url=$addver_data['url'];
				}
		 ?>
		 <?php
		  
		  if($pic_url !='null' && $code=='null' && $flash=='null')
		 {
		 ?>
		 
		    <a title="Holiday Shop" href="<?php echo $url; ?> " target="_blank">
        	<img src="<?php echo 'control_panel/'.$add_pic_url; ?>" name=image alt="Holiday Shop">
            
             <?php  
			 }
	elseif($pic_url =='null' && $code !='null' && $flash=='null')
	{
	echo stripslashes($code) ;
		   
		   ?>
		   
		   
		   <?php
	}
	
	
	// FOR FLASH
	
	elseif($pic_url =='null' && $code =='null' && $flash !='null')
	{
	?> 
   
        <object width="205" height="<?php echo $height; ?>">
    <param name="SRC" value="<?php echo 'admin/'.$flash; ?>">
    <embed src="<?php echo 'admin/'.$flash; ?>" width="205" height="<?php echo $height; ?>"></embed>
    </object>
     
     <?php
	}
	
	else 
	{
	//echo "Some problem occured";	
	echo $code;
	}
	
	
	?>
        	
        	
          
        </a>
     </li>  
 
    </ul>
 
</div>
</div>


<!--START RANDOM DETAILS-->

<?php include('random_details.php'); ?>

<!--END RANDOM DETAILS-->

<!--START OUR FAVOURITES-->

<?php include('our_favourites.php'); ?>

<!--START OUR FAVOURITES-->



<style>
ul.promotions li a img {
border-radius: 5px;
}

ul.catlistfp li .cbright .bannertype .save .medx {font-size:49px;}

.prolist2 {
	margin: 10px 0 0 0;
}

.goldspot-2012-btn {
left:144px;
}
</style>
<script type="text/javascript">function ddajaxtabs(a,b){this.tabinterfaceid=a;this.tabs=document.getElementById(a).getElementsByTagName("a");this.enabletabpersistence=true;this.hottabspositions=[];this.currentTabIndex=0;this.contentdivid=b;this.defaultHTML="";this.revcontentids=[];this.selectedClassTarget="link"}var ddajaxtabssettings={};ddajaxtabssettings.bustcachevar=1;ddajaxtabssettings.loadstatustext="LOADING CONTENT...";ddajaxtabs.connect=function(a,b){var c=false;var d="";if(window.ActiveXObject){try{c=new ActiveXObject("Msxml2.XMLHTTP")}catch(e){try{c=new ActiveXObject("Microsoft.XMLHTTP")}catch(e){}}}else if(window.XMLHttpRequest)c=new XMLHttpRequest;else return false;var f=a.replace(/^http:\/\/[^\/]+\//i,"http://"+window.location.hostname+"/");c.onreadystatechange=function(){ddajaxtabs.loadpage(c,a,b)};if(ddajaxtabssettings.bustcachevar)d=f.indexOf("?")!=-1?"&"+(new Date).getTime():"?"+(new Date).getTime();c.open("GET",f+d,true);c.send(null)};ddajaxtabs.loadpage=function(a,b,c){var d=c.contentdivid;document.getElementById(d).innerHTML=ddajaxtabssettings.loadstatustext;if(a.readyState==4&&(a.status==200||window.location.href.indexOf("http")==-1)){document.getElementById(d).innerHTML=a.responseText;ddajaxtabs.ajaxpageloadaction(b,c)}};ddajaxtabs.ajaxpageloadaction=function(a,b){b.onajaxpageload(a)};ddajaxtabs.getCookie=function(a){var b=new RegExp(a+"=[^;]+","i");if(document.cookie.match(b))return document.cookie.match(b)[0].split("=")[1];return""};ddajaxtabs.setCookie=function(a,b){document.cookie=a+"="+b+";path=/"};ddajaxtabs.prototype={expandit:function(a){this.cancelautorun();var b="";try{if(typeof a=="string"&&document.getElementById(a).getAttribute("rel"))b=document.getElementById(a);else if(parseInt(a)!=NaN&&this.tabs[a].getAttribute("rel"))b=this.tabs[a]}catch(c){alert("Invalid Tab ID or position entered!")}if(b!="")this.expandtab(b)},cycleit:function(a,b){if(a=="next"){var c=this.currentTabIndex<this.hottabspositions.length-1?this.currentTabIndex+1:0}else if(a=="prev"){var c=this.currentTabIndex>0?this.currentTabIndex-1:this.hottabspositions.length-1}if(typeof b=="undefined")this.cancelautorun();this.expandtab(this.tabs[this.hottabspositions[c]])},setpersist:function(a){this.enabletabpersistence=a},loadajaxpage:function(a){ddajaxtabs.connect(a,this)},loadiframepage:function(a){this.iframedisplay(a,this.contentdivid)},setselectedClassTarget:function(a){this.selectedClassTarget=a||"link"},getselectedClassTarget:function(a){return this.selectedClassTarget=="linkparent".toLowerCase()?a.parentNode:a},urlparamselect:function(a){var b=window.location.search.match(new RegExp(a+"=(\\d+)","i"));return b==null?null:parseInt(RegExp.$1)},onajaxpageload:function(a){},expandtab:function(a){var b=a.getAttribute("rel");var c=a.getAttribute("rev")?","+a.getAttribute("rev").replace(/\s+/,"")+",":"";if(b=="#default")document.getElementById(this.contentdivid).innerHTML=this.defaultHTML;else if(b=="#iframe")this.iframedisplay(a.getAttribute("href"),this.contentdivid);else ddajaxtabs.connect(a.getAttribute("href"),this);this.expandrevcontent(c);for(var d=0;d<this.tabs.length;d++){this.getselectedClassTarget(this.tabs[d]).className=this.tabs[d].getAttribute("href")==a.getAttribute("href")?"selected":""}if(this.enabletabpersistence)ddajaxtabs.setCookie(this.tabinterfaceid,a.tabposition);this.setcurrenttabindex(a.tabposition)},iframedisplay:function(a,b){if(typeof window.frames["_ddajaxtabsiframe-"+b]!="undefined"){try{delete window.frames["_ddajaxtabsiframe-"+b]}catch(c){}}document.getElementById(b).innerHTML=this.defaultIframe;window.frames["_ddajaxtabsiframe-"+b].location.replace(a)},expandrevcontent:function(a){var b=this.revcontentids;for(var c=0;c<b.length;c++){document.getElementById(b[c]).style.display=a.indexOf(","+b[c]+",")!=-1?"block":"none"}},setcurrenttabindex:function(a){for(var b=0;b<this.hottabspositions.length;b++){if(a==this.hottabspositions[b]){this.currentTabIndex=b;break}}},autorun:function(){this.cycleit("next",true)},cancelautorun:function(){if(typeof this.autoruntimer!="undefined")clearInterval(this.autoruntimer)},init:function(a){var b=ddajaxtabs.getCookie(this.tabinterfaceid);var c=-1;var d=this.urlparamselect(this.tabinterfaceid);this.automodeperiod=a||0;this.defaultHTML=document.getElementById(this.contentdivid).innerHTML;for(var e=0;e<this.tabs.length;e++){this.tabs[e].tabposition=e;if(this.tabs[e].getAttribute("rel")){var f=this;this.hottabspositions[this.hottabspositions.length]=e;this.tabs[e].onclick=function(){f.expandtab(this);f.cancelautorun();return false};if(this.tabs[e].getAttribute("rev")){this.revcontentids=this.revcontentids.concat(this.tabs[e].getAttribute("rev").split(/\s*,\s*/))}if(d==e||this.enabletabpersistence&&c==-1&&parseInt(b)==e||!this.enabletabpersistence&&c==-1&&this.getselectedClassTarget(this.tabs[e]).className=="selected"){c=e}}}if(c!=-1)this.expandtab(this.tabs[c]);else this.expandtab(this.tabs[this.hottabspositions[0]]);if(parseInt(this.automodeperiod)>500&&this.hottabspositions.length>1){this.autoruntimer=setInterval(function(){f.autorun()},this.automodeperiod)}}};var countries=new ddajaxtabs("sdtabs","sddivcontainer");countries.setpersist(true);countries.setselectedClassTarget("link");countries.init();</script>
</div><!-- end homepage -->



<!-- start footer-->

<?php include('footer.php'); ?>

<!--end footer -->



</div><!-- end wrapper -->
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












<script type="text/javascript">Venda.Ebiz.awCookieChecker(location.href); var axel = Math.random() + ""; var a = axel * 10000000000000; document.write('<iframe src="http://fls.doubleclick.net/activityi;src=543273;type=super602;cat=homep137;ord=1;num=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
</script>
<noscript><iframe src="http://fls.doubleclick.net/activityi;src=543273;type=super602;cat=homep137;ord=1;num=1?" width="1" height="1" frameborder="0" style="display:none"></iframe></noscript>
</body>
</html>