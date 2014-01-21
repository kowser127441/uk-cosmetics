 <?php
$con = mysql_connect("localhost","londoncosmetics","dD5pqavt");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("londoncosmetics", $con);


?>