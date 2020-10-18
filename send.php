<?php

include "database.php";
$dbCon = database();

if (isset($_POST['submit']))
{
	$message = htmlspecialchars(mysqli_escape_string($dbCon, $_POST['msg']));
	$date = date("Y-m-d H:i:s");

	if ($message == FALSE)
	{
		echo "<script>alert('Write Something!')</script>";
		echo header("Location: index.php?=Error=Message=Empty!");
	}
	else
	{
		$sql = "INSERT INTO ajax_container (message, date) VALUES ('$message','$date')";
		$query = mysqli_query($dbCon, $sql) or die ($dbCon->error);
		echo header("Location: index.php?=Message=Successfully=Sent!");
	}
}
 ?>
