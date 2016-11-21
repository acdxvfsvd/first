<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Message board</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" >
	<style type="text/css">
	html,body
	{
		height: 100%;
		min-height: 100%; 
	}
	html
	{
		overflow-x: hidden; 
		overflow-y: auto;
	}
	.main
	{
		width: 100%;
		background-color: rgba(255,255,255,0.1);
		position: relative;
		min-height: 100%;
		height: auto !important;
		text-align: center;
		padding-top: 10px;
		font-size: 30px;
	}
	.form
	{
		font-size: 30px;

	}
	</style>
	<script src="./js/jquery-3.1.1.js"></script>
	<script src="./js/jquery.form.js"></script>
</head>
<body>
<div class="main">
	<?php
		$i = "display: none;";
		if (isset($_COOKIE['user']))
		{
			$i = "display: block;";
		}
		else
		{
			echo "You have not logged in!";
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
	?>
	<p style="text-align: right; font-size:16px; color:#ffffff;">Logged in as: <?php echo base64_decode($_COOKIE['user']); ?>&nbsp;<a href="index.php?reset=1">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	<form id="contentform" method="POST" action="main.php" style="<?php echo $i; ?>">
		<textarea id="content" type="text" class="message" name="content" cols="30" wrap="hard" placeholder="Put your messages here……No more than 300 characters"></textarea>
		<input id="button" type="submit" class="button" value="Submit" >
	</form>

	<div style="<?php echo $i; ?>" id="getcontent" > </div>
	<br>
	<!-- <div id="nav"></div> -->
	<script type="text/javascript">
			window.onload=function ()
			{
				htmlobj=$.ajax({url:"./php/getcontent.php",async:false});
  				$("#getcontent").html(htmlobj.responseText);
            };

    		$('form').on('submit', function() 
			{
        		var content = $('textarea').val();
				if (content == "")
				{
					alert("Please input your messages!");
					return false;
				}
				if (content.length > 300)
				{
					alert("No more than 300 characters!");
					return false;
				}
				$(this).ajaxSubmit(
				{
            		type: 'post', 
            		url: './php/add.php', 
            		data: 
					{
                		'content': content
            		},
                	success: function() 
					{ 
//                 		alert('Success!');
						htmlobj=$.ajax({url:"./php/getcontent.php",async:false});
  						$("#getcontent").html(htmlobj.responseText);
            		}
            	 });
				document.getElementById("contentform").reset(); 
        		return false; 
            });
	</script>
</div>
</body>
</html>