<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("test", $con);

?>


<html>
<head>
	
</head>
<body>



<?php


//$data =  $_POST['editor1'];

//$text = $_POST['text'];


//echo $data ;


// echo '<xmp>'.$data.'</xmp>';

// $iframe = '<iframe width="420" height="315" src="http://www.youtube.com/embed/UMV3ww1irZY" frameborder="0" allowfullscreen></iframe>';

// echo $iframe;

//$dd = '<iframe frameborder="0" height="360" src="http://www.youtube.com/embed/ASO_zypdnsQ" width="640"></iframe>';

$dd = $_POST['editor1'];
$query = "INSERT INTO random (data) VALUES ('$dd')";

if(!mysql_query($query))
{
echo "not inserted in database";	
	
}

else
{
	$sql= mysql_query("SELECT * FROM random ORDER BY id DESC LIMIT 1 ");
	while($row = mysql_fetch_array($sql))
	
	{
			echo $row['data'];
			echo '<xmp>'.$row['data'].'</xmp>';
	}
	
	
}



?>

<a style="background-color:"

<!--<iframe frameborder="0" height="315" scrolling="no" src="//www.youtube.com/embed/ASO_zypdnsQ" width="560"></iframe>


<iframe width="560" height="315" src="//www.youtube.com/embed/ASO_zypdnsQ" frameborder="0" ></iframe>
-->
</body>
</html>