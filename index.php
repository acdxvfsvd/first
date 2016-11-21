<?php 
	
	if(isset($_POST['reset']))
	{
		setcookie("user", "", time()-10800);
	}
	if(isset($_GET['reset']))
	{
		setcookie("user", "", time()-10800);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" >
</head>
<body>
	<div class="title">WELCOME
		<p style="font-size:14px;">acdxvfsvd's message board</p>
	</div>

	<form class="intform" method="POST" action="submit.php">
		<!-- <span class="icon-user"></span> -->
		<input class="input" id="logininput" name="username" type="text" placeholder="Username">
		<input class="input" id="logininput" name="password" type="password" placeholder="Password">
		&nbsp;<input class="button" type="submit" value="Login">
		<!-- <input class="button" type="submit" value="Register" formaction="register.php"> -->
		<br>
		<span style="font-size:18px;">Not having account? <a href="register.php">Register</a> Now!</span>
		<br>
		<br>
		<br>
		<br>
		<p style="font-size:12px;">Copyright, acdxvfsvd 2016</p>
	</form>
</body>
</html>