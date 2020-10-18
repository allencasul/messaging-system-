<?php
//DATABASE CONNECTION
function database()
{
	$userHost = "localhost";
	$userName = "root";
	$userPass = "";
	$userDB = "ajax";

	$dbCon = new mysqli($userHost, $userName, $userPass, $userDB);
	if($dbCon->connect_error)
	{
	echo $dbCon->connect_error;
	}
	else
	{
	return $dbCon;
	}
}
?>





