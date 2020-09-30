<?php
include_once "Database.php";
include_once "Password-php";

$Link = ConnectDatabase();

if(isset($_POST['User']))
{
	// Trying to log in
	//
}
else
{
	// SHow longin form
	echo "<!DOCTYPE html>";
	echo "<html><head>";
	echo "<title>Kirjautumis sivu</title>";
	echo "</head><body>";
	
	echo "<div name=\"Login\">";
	// Add form here
	echo "</div>";

	echo"</body></html>";

}


?>
