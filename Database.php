<?php
$Server = "127.0.0.1";
$User_DB = "Jurva2";
$Password_DB ="Dra200xs";
$Database ="Jurva2";

function ConnectDatabase()
{
	$Link = mysqli_connect($Server, $User_DB, $Password_DB, $Database);
	
	if(!$Link)
	{
		echo "Error: Unable to connect to database.".PHP_EOL;
		echo "Debugging errno: ".mysqli_connect_errno().PHP_EOL;
		echo "Debugging error: ".mysqli_connect_error().PHP_EOL;
		exit;
	}

	return $Link;
}


?>
