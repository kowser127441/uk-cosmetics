<div id="header-2012"><div class="Lcat_header-2012"><div class="Lcat_header-top"><h3><a href="cart.php">Check out</a></h3>
<ul class="items_added">
	<li class="items"><a href="cart.php" id="minicart_items"><span id="updateItems">
    <?php
	error_reporting(0);
	session_start();
	
	include('cartClass.php');
	
	$count = ShopingCart::getCartProductNo();
	echo $count;
	
	
	
	
	?>
    </span></a></li>
	<li class="total"><a href="cart.php" id="minicart_total">/<span id="updateTotal">£<?php 
	
		echo ShopingCart::getCartAmount() ;
	
	
	
	  ?></span></a></li>
</ul>
<div class="minicart"><div class="Lcat_minicart"><h2><a href="http://www.superdrug.com/bin/venda?ex=co_wizr-shopcart&bsref=superdrug&log=22" id="showminicart">View basket</a></h2>




<div id="cartwrapper" >
<div class="Lminicart_detail" id="minicart_element" >






<ul id="minicart_products"  >


<!-- Start mini busket product start-->


<?php
if(is_array($_SESSION['cart'])){
				$max_counter=count($_SESSION['cart']);
				for($i=0;$i<$max_counter;$i++){
				
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];
					
				//	$details=new Product($pid);
				//	$product_details= $details->getProductInfo($pid);
					
					if($q==0) continue;
					
				


				$cart_product = ShopingCart::productInfo($pid);


?>



<li class="li_641056" id="li_641056">



	<div class="details">
	<h2><a href="view_product.php?product_id=<?php echo $pid; ?>"><?php echo $cart_product['product_name']; ?></a></h2>
	
	<p class="price">£<?php echo $cart_product['price']; ?>&nbsp;each</p>
	<p class="quantity">Qty:&nbsp;<?php echo $q; ?></p>
	</div>

	<div class="image">
	
	
		
		
		
		<a href="view_product.php?product_id=<?php echo $pid; ?>"><img src="<?php echo $cart_product['image']; ?>" style="width:50px; height:50px;" border=0 name=thumb alt="Real Techniques Core Collection"></a>
		
		
	
	</div>





</li>

<?php
				}
}
?>





<!--End of mini busket product start-->


</ul>




<ul id="minicart_totals" class="items_added">
	<li class="items bottom"><a href="cart.php">Items:<span id="updatemdItems2"><?php echo $max_counter; ?></span></a></li>
	<li class="total bottom"><a href="cart.php">Total:<span id="updatemdTotal2" class="price">£<?php echo ShopingCart::getCartAmount(); ?></span></a></li>

</ul>





<ul id="minicart_links">
<li class="viewbasket"><a href="cart.php">View Basket</a></li>
<li class="checkout">


	
		
		<a href="cart.php">
	
	
	Checkout</a>




</li>
</ul>




</div>
</div>
<!-- discount:  -->
<style type="text/css">#cartwrapper {position:absolute;left:0px;top:-5000px;width:1px;overflow:hidden;}</style>


<div id="tag-elxtdraggable" style="display:none;"></div>
<div id="tag-elxtfade" style="display:none;">1</div>
<div id="tag-elxtscroll" style="display:none;">1</div>
<div id="tag-elxtheader" style="display:none;">1</div>
<div id="tag-elxtnopopupadded" style="display:none;"></div>
<div id="tag-elxthighlight" style="display:none;">1</div>
<div id="tag-elxtwidth" style="display:none;">250</div>
<div id="tag-elxtmouseover" style="display:none;"></div>
<div id="tag-elxtautoclose" style="display:none;"></div>
<div id="tag-elxtnoreload" style="display:none;"></div>
<div id="tag-elxtscrolledheight" style="display:none;"></div>

<div id="tag-elxtclose" style="display:none;">minicart-close</div>
<div id="tag-elxtheadertext" style="display:none;"><span>My Basket</span></div>
<div id="tag-elxtloadingmessage" style="display:none;">Please wait</div>
<div id="tag-elxthighlightbgrstart" style="display:none;">#eeeeee</div>
<div id="tag-elxthighlightbgrend" style="display:none;">#eeeeee</div>
<div id="tag-elxthighlightduration" style="display:none;">2</div>
<div id="tag-elxteffectsduration" style="display:none;">0.3</div>
<div id="tag-addedmsg" style="display:none;"></div>
<div id="tag-bsref" style="display:none;">superdrug</div>
<div id="tag-codehttp" style="display:none;">http://www.superdrug.com/bin/venda</div>
<div id="tag-elxtitemspricestart" style="display:none;"></div>
<div id="tag-elxtitemspriceend" style="display:none;"></div>
<div id="tag-elxtitemspricebgrstart" style="display:none;"></div>
<div id="tag-elxtitemspricebgrend" style="display:none;"></div>
<div id="tag-elxtitemspriceduration" style="display:none;">2</div>
<div id="tag-elxtscrolledheightpad" style="display:none;">0</div>
<script type="text/javascript">

	if (typeof Venda.Widget.MinicartPopup != "undefined" || Venda.Widget.MinicartPopup) {
	Venda.Widget.MinicartPopup.create(['minicart-close', 'showminicart'],
 	{
		draggable:		document.getElementById('tag-elxtdraggable').innerHTML,

		fade:			document.getElementById('tag-elxtfade').innerHTML,
		scroll:			document.getElementById('tag-elxtscroll').innerHTML,
		nopopupadded:	document.getElementById('tag-elxtnopopupadded').innerHTML,
		header:			document.getElementById('tag-elxtheader').innerHTML,
		highlight:		document.getElementById('tag-elxthighlight').innerHTML,
		width:			document.getElementById('tag-elxtwidth').innerHTML,
		mouseover:		document.getElementById('tag-elxtmouseover').innerHTML,
		mouseover:		document.getElementById('tag-elxtmouseover').innerHTML,
		milliseconds:	document.getElementById('tag-elxtautoclose').innerHTML,
		noreload:		document.getElementById('tag-elxtnoreload').innerHTML,
		relativeHeight:	document.getElementById('tag-elxtscrolledheight').innerHTML
		}, 
	{
		effectsduration:	document.getElementById('tag-elxteffectsduration').innerHTML,
		close:				document.getElementById('tag-elxtclose').innerHTML,
		headertext: 		document.getElementById('tag-elxtheadertext').innerHTML,
		loadingmessage: 	document.getElementById('tag-elxtloadingmessage').innerHTML,
		highlightbgrstart:	document.getElementById('tag-elxthighlightbgrstart').innerHTML,
		highlightbgrend:	document.getElementById('tag-elxthighlightbgrend').innerHTML,
		highlightduration:	document.getElementById('tag-elxthighlightduration').innerHTML,
		addedsku:			document.getElementById('tag-addedmsg').innerHTML,
		bsref:				document.getElementById('tag-bsref').innerHTML,
		formaction:			document.getElementById('tag-codehttp').innerHTML,
		fromcolor:			document.getElementById('tag-elxtitemspricestart').innerHTML,
		tocolor:			document.getElementById('tag-elxtitemspriceend').innerHTML,
		frombgrcolor:		document.getElementById('tag-elxtitemspricebgrstart').innerHTML,
		tobgrcolor:			document.getElementById('tag-elxtitemspricebgrend').innerHTML,
		fromtoduration:		document.getElementById('tag-elxtitemspriceduration').innerHTML,
		relativeHeightPad:	document.getElementById('tag-elxtscrolledheightpad').innerHTML
	});
};
</script>

<div id="minicart_detail"></div>
</div></div><div class="header-links">

</div>

<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['user_access']))
{
?>

<ul class="Lustypelinks loginsignout" id="ustypelinks">
	<li class="login">
   <a href="login.php" id="Lustype_loginlink">Login / Register</a>
    </li>
</ul>
<?php
}
else
{
?>

<ul class="Lustypelinks loginsignout" id="ustypelinks">
	<li class="first myaccount">
   <a href="login.php" id="Lustype_myacclink" >My Account</a>
   
   
   
   
   
   <div id="mapreview-wrapper">
        <div id="mapreview">
        
            <div id="mapreview-top" class="clearfix">
                <h3>My Account</h3>
                <span id="mapreview-close"><img src="https://www.superdrug.com/content/ebiz/superdrug/resources/images/close.gif" alt="Close" /></span>
            </div>            
            
            <div id="mapreview-bottom">                
                <div id="mapreview-right">
                    <ul>
                        <li class="mapreview-username"><?php echo $_SESSION['user_full_name']; ?></li>
                        <li><?php echo $_SESSION['user_email']; ?></li>
                        <li></li>              
                    </ul>
                    
                    <ul>
                        <li><a href="http://www.superdrug.com/my-account/page/myaccount" title="View/update My Account">View/update my account</a></li>
                        <li><a href="https://www.superdrug.com/bin/venda?ex=co_wizr-ordlookup&amp;bsref=superdrug&amp;template=wz_orpo-screen&amp;layout=myaccount" title="View Order History">View order history</a></li>
                    </ul>
                    <div id="mapreview-promo">
                    	
                        
                        
                    	<ul>
                    		<li>Got a <span class="bcard"><strong>Beauty</strong>card</span>? Register below</li>
                    		<li><a href="https://www.superdrug.com/bin/venda?ex=tl_user-myform&bsref=superdrug&layout=myaccount&param1=survey&htxt=SSXzZvtdRcGJceTZkpaDUR3Jx%2B7Gts%2B8iTFQNkFfuLM1JquaWmzhtfJJvuZzLtxTv5vLoO4Cw%2FG%2FYHTK3X%2BfKQ%3D%3D"><img src="/content/ebiz/superdrug/page/myaccountpreview/lregister.gif" alt="Register now"></a></li>
                        </ul>
                        
                        
                    </div>              
       
            	</div> 
                
                <div id="mapreview-buttons" class="clearfix">
                	<ul>
                    	<li><a id="mapreview-logout" title="Logout" href="http://www.superdrug.com/superdrug/page/home/&log=4">Logout</a></li>
                        <li><a id="mapreview-myaccount" title="myaccount" href="http://www.superdrug.com/my-account/page/myaccount">Myaccount</a></li>
                    </ul>
                </div>                               
            </div>
            
        </div>        
	</div>


<script type="text/javascript">
$(document).ready(function(){
	
	$('a#Lustype_myacclink').click(function(e){
		e.preventDefault();
		$('div#mapreview').fadeIn(300);
		$('div#mapreview-wrapper').slideDown(300);
		$(this).addClass('viewaccountactive');		
	});	
	
	$('span#mapreview-close').click(function(){		
		$('div#mapreview-wrapper').slideUp(300);
		$('div#mapreview').fadeOut(200);
		$('a#Lustype_myacclink').removeClass('viewaccountactive');	
	});
});
</script>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    </li>
</ul>


<ul class="Lustypelinks loginsignout" id="ustypelinks">
	<li class="login">
   <a href="logout.php" id="Lustype_loginlink">Logout</a>
    </li>
</ul>

<ul class="Lustypelinks loginsignout" id="ustypelinks">
	<li class="login">
   Hi <?php echo $_SESSION['user_name']; ?>
    </li>
</ul>





<?php
}
?>


<p class="Lwelcome welcome" id="welcome"></p></div><div class="Lcat_superdrug-logo"><a href="index.php" title="UK-Cosmetics home" name="Home">UK-Cosmetics</a></div><div class="Lcat_search-con"><script type="text/javascript">
var url = 'http://www.superdrug.com';
</script>
<div class="headerSearch">
<h5 class="hide">Search</h5>
<form onsubmit="checkFieldGN('formsolrsearch','q','Search Keyword/Product ID'); checkFormGN(); return(false);" id="formsolrsearch" name="formsolrsearch" action="/search">
	<label for="q">Keyword:</label>
	<input type="text" class="textInput" onclick="if (this.value=='Search Keyword/Product ID'){this.value='';}" onBlur="if (q.value==''){q.value='Search Keyword/Product ID';}"value="Search Keyword/Product ID" size="20" id="q" name="q"> <input type="submit" class="submit button" onclick="if (q.value=='Search Keyword/Product ID'){q.value='';}" value="Search" id="searchsubmit" name="searchsubmit">
</form>
</div></div></div></div>