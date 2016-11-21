


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" >
	<style type="text/css">
		.content
		{
			background-color: rgba(255,255,255,0.1);
			height: 800px;
			position: relative;
			text-align: center;
			padding-top: 200px;
			color: #FFFFFF;
			font-size: 30px;
		}
	</style>
</head>
<body>
	<div class="title">LOGIN
		<p style="font-size:14px;">acdxvfsvd's message board</p>
	</div>
	<div class="content">
		<?php
			if (isset($_COOKIE['user']))
			{
				echo "You have already logged in!";
				echo "<br>";
				echo "<form action=\"index.php\" method=\"POST\">";
				echo "<button class=\"button\" type=\"submit\">Logout</button>";
				echo "<input name=\"reset\" value=\"1\" style=\"display:none;\">";
				echo "</form>";
				echo "<br>";
				echo "<br>";
				echo "<div id=\"show\">5 seconds to the main page……</div>";
				echo "<script type=\"text/javascript\">";
				echo "var t=4;";
				echo "setInterval(\"refer()\",1000); ";
				echo "function refer()";
				echo "{";
       			echo "if(t==0)";
                echo "{";
				echo "location=\"main.php\";"; 
				echo  "}";
				echo "document.getElementById('show').innerHTML=\"\"+t+\" seconds to the main page……\";"; 
				echo "t--; ";
				echo "}";
       			echo "</script>";
			}
			else
			{
				$servername = "127.0.0.1"; 
				$usernamesql = "root"; 
				$passwordsql = ""; 
				$con = mysqli_connect($servername, $usernamesql, $passwordsql);

				$dbname = "php2users";

				mysqli_select_db($con,$dbname);
				mysqli_set_charset($con, "utf8");

				$username=$_POST["username"];
				$password=$_POST["password"];
				
				$pre = "SELECT * from users WHERE username = ";
				$query = "{$pre}'{$username}'";
				//echo $query;
				$get = mysqli_query($con, $query);

				//print_r($get);
				$result = mysqli_fetch_assoc($get); 
				//print_r($result);
				if ($result == false)
				{
					echo "The account does not exist!";
					echo "<br>";
					echo "<br>";
					echo "<div id=\"show\">5 seconds to the login page……</div>";
					echo "<script type=\"text/javascript\">";
					echo "var t=4;";
					echo "setInterval(\"refer()\",1000); ";
					echo "function refer()";
					echo "{";
       				echo "if(t==0)";
                	echo "{";
					echo "location=\"index.php\";"; 
					echo  "}";
					echo "document.getElementById('show').innerHTML=\"\"+t+\" seconds to the login page……\";"; 
					echo "t--; ";
					echo "}";
       				echo "</script>";
				}
				else
				{
					if ($result['password'] != $password) 
					{
						echo "Wrong password!";
						echo "<br>";
						echo "<br>";
						echo "<div id=\"show\">5 seconds to the login page……</div>";
						echo "<script type=\"text/javascript\">";
						echo "var t=4;";
						echo "setInterval(\"refer()\",1000); ";
						echo "function refer()";
						echo "{";
       					echo "if(t==0)";
                		echo "{";
						echo "location=\"index.php\";"; 
						echo  "}";
						echo "document.getElementById('show').innerHTML=\"\"+t+\" seconds to the login page……\";"; 
						echo "t--; ";
						echo "}";
       					echo "</script>";
					}
					else
					{
						echo "Welcome, ";
						echo $username;
						echo "!";
						setcookie("user", base64_encode($username), time()+10800);
						echo "<br>";
						echo "<br>";
						echo "<div id=\"show\">5 seconds to the main page……</div>";
						echo "<script type=\"text/javascript\">";
						echo "var t=4;";
						echo "setInterval(\"refer()\",1000); ";
						echo "function refer()";
						echo "{";
       					echo "if(t==0)";
                		echo "{";
						echo "location=\"main.php\";"; 
						echo  "}";
						echo "document.getElementById('show').innerHTML=\"\"+t+\" seconds to the main page……\";"; 
						echo "t--; ";
						echo "}";
       					echo "</script>";
					}
				}
			}
		?>
	</div>
</body>
</html>


