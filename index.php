<?php
include_once "Database.php";
include_once "Password-php";

$Link = ConnectDatabase();

if($_SESSION['LoggedIn']==TRUE)
{
	// User already logged in....
	//
}
else
{
	header("Location: Login.php");
	exit;
}


?>
