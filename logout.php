<?php 
ob_start(); 
?>

<?php

session_start();


unset($_SESSION['user_access']);
unset($_SESSION['user_email']);
unset($_SESSION['password']);
unset($_SESSION['user_name']);
unset($_SESSION['user_full_name']);


header('Location: ' . $_SERVER['HTTP_REFERER']);
			die();	

?>