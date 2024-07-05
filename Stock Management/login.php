<?php
	include("connection.php")

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" href="style.css">
	<script src="script.js"></script>
</head>
<body onload="showDateTime()">
	<nav class="top_nav">
		<div style="margin-left: 5%;"><img src="logo.svg" alt="The Big 4" height="100vh" width="100vh"></div>
		<div style="margin-right: 5%; margin-top: auto; margin-bottom: auto;" id="datetime"></div>
	</nav>
		<form class="login_box" name="form" action="fetch.php" method="POST">
			<h1>Log In</h1>
			<input type="text" id="identity" name="idenTity" placeholder="ID" required><br>	
			<input type="text" id="name" name="userName" placeholder="username" required><br>
			<input type="password" id="password" name="passWord" placeholder="password" required><br>
			<input class="login_button" type="submit" id="btn" value="Log In" name="submit">		
			
		</form>

</body>
</html>