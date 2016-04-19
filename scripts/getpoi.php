<?php
	include_once "init.php";
	$query = "Select name, longitude, latitude from Points_Of_Interest;";
	$result = mysqli_query($con,$query) or die("Could not access points of interest");
	$output = "";
	while($row = mysqli_fetch_array($result))
	{
		$output .= "BREAK".$row[0];
		$output .= "BREAK".$row[1];
		$output .= "BREAK".$row[2];
	}
	echo $output;	
?>