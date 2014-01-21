<?php
include '../connection.php';
?>

<?php
$bodySelect=$_REQUEST['bodySelect'];

?>



<table class="data display datatable" id="example" style="width:900px;">
		<thead>
			<tr>
		            <th>Position</th>
					<th>Picture</th>
					<th>Code</th>
                    <th>Flash</th>
                    <th>Width</th>
                    <th>Height</th>
                    <th>Action</th>
                    
                    
                

			</tr>
		</thead>
		<tbody>
                                        <?php
										
					include 'connection.php';

					$i=1;
					$sql=mysql_query("SELECT * FROM add_home WHERE page_id='$bodySelect' ORDER BY position");
					
						while($data=mysql_fetch_array($sql)){
							$page_id = $bodySelect ;
							$position = $data['position'];
							$pic_url = $data['pic_url'];
							$code = $data['code'];
							$flash = $data['flash'];
							$width =240;
							$height = $data['height'];
							
						
					?>
                    	
			<tr class="odd gradeX">

				<td><?php echo $position;?></td>
				
				<td class="center">
					 <?php	echo $pic_url;  ?>
                </td>
				
                <td class="center">
               <?php echo $code; ?>
                </td>
                
                <td class="center">
               <?php echo $flash; ?>
                </td>
                
               <td class="center">
               <?php echo $width; ?>
                </td>
                
                <td class="center">
               <?php echo $height; ?>
                </td>
                
                <td class="center">
               
			   <a href="remove_add.php?page_id=<?php echo $page_id; ?>&position=<?php echo $position; ?>"  onClick="return confarmation()" > Remove </a>
                </td>
				
		     </tr>
			
           <?php

					}
					 ?>
                        
		</tbody>
				</table>
