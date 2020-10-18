<!DOCTYPE html>
<html>
<head>
	<title>ajax</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="ajax.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="main.js"></script>
</head>
	<body>
		<div id="stage">
			<?php
			include "display.php";
			?>
		</div>
		<style type="text/css">
			.arrange
			{
				padding: 20px;
				font-size: 15px;
				font-family: sans-serif;
				color: darkgray;
				margin-left: 10px;
			}

			.date
			{
				font-family: sans-serif;
				color: #c9c9c9;
				border: 1px solid #d4d4d4;
				padding: 5px;
				width: 126px;
				border-radius: 0px 14px 14px 14px;
				margin-top: 5px;
				font-size: 13px;
				padding-left: 15px;
			}

			.main-text
			{	
				background-color: skyblue;
				color: #ffffff;
				font-weight: bold;
				font-size: 17px;
				padding: 25px;
				border-radius: 50px 50px 50px 0px;
				max-width: 440px;
				display: inline-block;
				margin: 0;
			}

			.main-text::after
			{
				content: "";
				display: block;
				width: 0;
				height: 0;
				margin-left: -38px;
				margin-top: -20px;
				border-top: 9px solid transparent;
				border-bottom: 9px solid transparent;
				border-right: 15px solid skyblue;
			}
		</style>
		<form action="send.php" method="POST">
			<textarea name="msg" id="message" placeholder="Write a reply..."></textarea>
			<button name="submit" id="send" type="submit" >Send</button>
		</form>
	</body>
</html>

