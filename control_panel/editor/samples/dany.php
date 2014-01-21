<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<!--
Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
-->
<html>
<head>
	<title>User Interface Globalization &mdash; CKEditor Sample</title>
	<meta charset="utf-8">
	<script src="../ckeditor.js"></script>
	<script src="assets/uilanguages/languages.js"></script>
	<link rel="stylesheet" href="sample.css">
</head>


<body>

 <center> <?php 
   if(isset($_SESSION['error']))
   
   {
	   
	   if($_SESSION['error']==1){
	   
	   echo "Not Successfully Updated";
	   }
	   
	   elseif($_SESSION['error']==2) {
		   
		   echo "Successfully Updated";
		   }
	   
	   } 
	   unset($_SESSION['error']);
	   
	   ?>
     </center>


<?php
 include('connection.php');
 
 $position = $_REQUEST['position'];
 
// echo $position ; 
 
 

 $query = mysql_query("SELECT *  FROM random_details WHERE position='$position'");
 while($p_data=mysql_fetch_array($query))
 {
	 $title = $p_data['title'];
	 $details = $p_data['details'];
	 $sort_details1 = $p_data['sort_details1'];
	 $sort_details2 = $p_data['sort_details2'];
	 
	 	 $link1 = $p_data['link1'];
		 $link2 = $p_data['link2'];
 }


 ?>   
   


	<form action="../../adding_random_details.php" method="post" enctype="multipart/form-data">
		<p>
			Available languages (<span id="count"> </span> languages!):<br>
			<script>

				document.write( '<select disabled="disabled" id="languages" onchange="createEditor( this.value );">' );

				// Get the language list from the _languages.js file.
				for ( var i = 0 ; i < window.CKEDITOR_LANGS.length ; i++ ) {
					document.write(
						'<option value="' + window.CKEDITOR_LANGS[i].code + '">' +
							window.CKEDITOR_LANGS[i].name +
						'</option>' );
				}

				document.write( '</select>' );

			</script>
			<br>
			
	  </p>
		<p>
			<textarea cols="80" id="editor1" name="editor1" rows="10"><?php echo $details; ?></textarea>
			<script>

				// Set the number of languages.
				document.getElementById( 'count' ).innerHTML = window.CKEDITOR_LANGS.length;

				var editor;

				function createEditor( languageCode ) {
					if ( editor )
						editor.destroy();

					// Replace the <textarea id="editor"> with an CKEditor
					// instance, using default configurations.
					editor = CKEDITOR.replace( 'editor1', {
						language: languageCode,

						on: {
							instanceReady: function() {
								// Wait for the editor to be ready to set
								// the language combo.
								var languages = document.getElementById( 'languages' );
								languages.value = this.langCode;
								languages.disabled = false;
							}
						}
					});
				}

				// At page startup, load the default language:
				createEditor( '' );

			</script>
		</p>
        <table>
        
        <tr>
        <td>Title : </td>
        <td><input type="text" name="title" value="<?php echo $title; ?>" /></td>
        </tr>
       
        <tr>
        <td>Text 1 : </td>
        <td><input type="text" name="details1" value="<?php echo $sort_details1; ?>" /></td>
        </tr>
        
        <tr>
        <td>Link 1 : </td>
        <td><input type="text" name="link1" value="<?php echo $link1; ?>" /></td>
        </tr>
        <br/>
         <br/>
         
     
                <tr>
        <td>Text 2 : </td>
        <td><input type="text" name="details2" value="<?php echo $sort_details2; ?>" /></td>
        </tr>
        
         <tr>
        <td>Link 2 : </td>
        <td><input type="text" name="link2" value="<?php echo $link2; ?>" /></td>
        </tr>
        <br/>
         <br/>
       <input type="hidden" name="position" value="<?php echo $position; ?>">  
       
        <br/>
        <br/>
        <tr>
        <td>Choose Image</td>
        <td><input type="file" name="uploaded">
        <br/>
        <span style="color:#F00">Image Resulation - 278*728 px </span>
        </td>
        </tr>
        
        </table>
          <br/>
          <br/>
          
          
          
        
        
       
       <input type="submit" value="Submit" >
        
</form>
	
</body>
</html>
