<?php
	$image = $_POST["image"];
	$name = "pictures/";
	$name .= "blah2";//$_POST['name'];
	$name .= ".jpg";
	$bitmap = base64_decode("$image");
	file_put_contents($name, $bitmap);
	echo "ScriptActivated";
?>