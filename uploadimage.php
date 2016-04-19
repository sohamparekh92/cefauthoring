<?php
	include_once 'function.php';
	$image = $_POST["image"];
	//$name = $_POST["name"];
	$query = "Select id from reported_items order by id DESC LIMIT 1";
	$result = mysql_query($query) or die("Could not access reported items ".mysql_error());
	while($row = mysql_fetch_array($result))
	{
		$name = (int) $row[0];
		echo $name;
	}	
	$name++;
	$name ="img".$name;
	echo $name;
	$path = "reporteditems/";
	$path .= $name;//$_POST['name'];
	$path .= ".jpg";
	$bitmap = base64_decode("$image");
	file_put_contents($path, $bitmap);
	$query = "Insert into reported_items(filename, filepath) values('".$name."','".$path."');";
	echo $query;	
	mysql_query($query) or die("Could not insert in reported items".mysql_error());
	echo "ScriptActivated";
?>