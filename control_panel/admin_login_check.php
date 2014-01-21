<?php 
ob_start(); 
?>
<?php

include '../connection.php';

$user_id= mysql_escape_string($_POST['name']);
$password= mysql_escape_string($_POST['password']);

session_start();


$query = mysql_query("Select * from admin_access WHERE admin_id='$user_id'") ;

echo mysql_error();
										
										while($data = mysql_fetch_array($query))
										{
										
										  $db_password = $data['password'];
										  $type = $data['type'];
										  //echo $db_password.'<br/>';
											
										}
										
										//echo 'db_password'.$db_password.'<br/>';
										
										
										// Retrive the Last Part With colone ':'
										$last = strstr($db_password,':');
										
										
										//echo 'salt with coon-'.$last.'<br/>' ; 
										// Remove colone ':' from Last Part 
										$last_without = substr($last, 1);
										
										//echo 'without- '.$last_without.'<br/>' ;
										// First Part 
										$first = substr($db_password , 0, 32);
										
										//echo 'first-'.$first.'<br/>' ;
										
										$pass_user = md5($password.$last_without);
										
										//echo 'pass+md5-'.$pass_user.'<br/>';
										
										if($pass_user == $first)
										{
											
											$_SESSION['admin_access']=$user_id;
											$_SESSION['user_name']=$user_id;
											$_SESSION['password']=$password;
											$_SESSION['admin_access_error']= 2;
											
											if($type=='admin')
											{
						 						Header('Location:admin.php');
											}
											elseif($type == 'accountant')
											{
												Header('Location:accountant.php');
											}
											
											elseif($type == 'salesman')
											{
												Header('Location:salesman.php');
											}
										}
										
										else
										{
											
											
											$_SESSION['admin_access_error']= 1;
						 					Header('Location:index.php');
										}
										

mysql_close($con);
					 
?>
