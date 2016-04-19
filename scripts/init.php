<?php

	$username = "ceftrails_p9l1";
	$password = "matsohstex82";
	$host = "mysql1.cs.clemson.edu";
	$db_name = "ceftrails_hy1k";

		$con = mysqli_connect($host,$username, $password, $db_name);
		if(!$con)
		{
			//echo "Failed to connect"."<br>";
		}
		else
		{
			//echo "connection Successfull";
		}
		
?>