<?php  
	
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" >
</head>
<body>
	<div class="title">REGISTER
		<p style="font-size:14px;">acdxvfsvd's message board</p>
	</div>
	<form class="intform" method="POST" action="submit.php">
		<?php  
			if (isset($_SESSION['isregister']))
			{
				echo "You have successfully registered!";
				unset($_SESSION['isregister']);
			}
			else
			{
				echo "Error!";
			}
			echo "<br>";
		?>
		<br>
		<br>
		<br>
		<div id="show">5 seconds to the login page……</div>
		<script type="text/javascript">
			var t=4;
			setInterval("refer()",1000); 
			function refer()
			{ 
                if(t==0)
                {
                    location="index.php"; 
                }
                document.getElementById('show').innerHTML=""+t+" seconds to the index page……"; 
                t--; 
		}

        </script>
	</form>
</body>
</html>