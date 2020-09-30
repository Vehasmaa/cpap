<?php
include_once "Database.php";

$Link = ConnectDatabase();

function CheckPassword($UserName,$Password)
{
	
	$Hash = password_hash();

	$Query = "SELECT Password FROM Users WHERE User='$UserName';";
	
	$QueryResult = mysqli_query($Link,$Query);
	if(passwrod_verify($Hash,$QueryResult))
	{
		# Password mach
		$_SESSION['User'] = $UserName;
		$_SESSION['LoggedIn'] = TRUE;
	}
	else
	{
		session_destroy();
		exit;
	}

}

?>
