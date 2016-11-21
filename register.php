


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" >
	<style type="text/css">
	
	.register
	{
		display: none;
	}
	.hintinfo
	{
		color: #dd2222;
		font-size: 18px;
		font-weight: 250;
		padding: 0;
		margin: 0 auto 0 auto;
	}
	</style>
</head>
<body>
	<script src="./js/registercheck.js"></script>
	<div class="title">REGISTER
		<p style="font-size:14px;">acdxvfsvd's message board</p></div>
	
		<?php
			$i = "display: none;";
			if (isset($_COOKIE['user']))
			{
				echo "<form class=\"intform\" action=\"index.php\" method=\"POST\">";
				echo "You have already logged in!";
				echo "<br>";
				echo "<button class=\"button\" type=\"submit\">Logout</button>";
				echo "<input name=\"reset\" value=\"1\" style=\"display:none;\">";
				echo "</form>";
			}
			else 
			{
				$i = "display: block;";
			}
		?>
		<form class="intform" method="POST" action="./php/registersubmit.php" class="register" id="registerform" style="<?php echo $i; ?>">
			<input class="input" name="username" id="username" type="text" onkeyup="CheckUsername(this.value)" style="ime-mode:disabled;" placeholder="Username">
			<br><span id="unameinfo" class="hintinfo"></span><br>
			<input class="input" name="password" id="password" type="password" onkeyup="CheckPassword(this.value)" style="ime-mode:disabled;" placeholder="Password">
			<br><span id="pswdinfo" class="hintinfo"></span><br>
			<input class="input" name="passwordc" id="passwordc" onkeyup="CheckPasswordConfirm(this.value)" style="ime-mode:disabled;" type="password" placeholder="Confirm Password">
			<br><span id="cpswdinfo" class="hintinfo"></span><br>
			<input class="input" name="email" id="email" type="text" onkeyup="CheckEmail(this.value)" placeholder="E-mail address">
			<br><span id="emailinfo" class="hintinfo"></span><br>
			<input class="button" type="button" onclick="CheckBeforeSubmit()" value="Submit">
			<!-- <input class="button" type="reset" value="Reset"> -->
			<br>
			<p style="font-size:18px;">Already have an account?<a href="index.php">Login</a></p>
			<span id="hint"></span>
		</form>
	
</body>
</html>