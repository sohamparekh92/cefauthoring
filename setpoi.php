<?php
	include_once "function.php";
	$query = "Insert into Points_Of_Interest(name, description, longitude, latitude) values('".$_POST['name']."','".$_POST['description']."','".$_POST['longitude']."','".$_POST['latitude']."');";
	mysql_query($query) or die("could not insert values into points of interest".mysql_error());

      Print '<script>alert("Point of interest added");</script>'; //Prompts the user
      Print '<script>window.location.assign("poi.php");</script>';
?>