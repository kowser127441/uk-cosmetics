<!-- Form Velidation--> 
    
 <script type="text/javascript">
function validateForm()
{
	

 
	
	
}
</script>  


<?php

$add_type=$_REQUEST['add_type'];


// WHEN IMAGE

if($add_type==1)
{
	?>
	
    <input type="file" name="uploaded" />
      URL : <input type="text" name="url" />
	
	<?php
}


// WHEN CODE

elseif($add_type==2)
{
	?>
    
    <textarea name="code"></textarea>
    
    <?php

}

// WHEN FLASH

elseif($add_type==3)
{
	?>
    
    <input type="file" name="uploaded" /><br/>
    
    <p style="display:inline;">Height : </p> <input type="text" name="height" style="width:100px;" />
    
    <?php

}

?>

<br/>
<input type="submit" value="Add" />

