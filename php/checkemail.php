<?php 
	error_reporting(E_ALL || ~E_NOTICE);
	error_reporting(E_ALL || ~E_WARNING);
	$servername = "127.0.0.1"; 
	$usernamesql = "root"; 
	$passwordsql = ""; 
	$con = mysqli_connect($servername, $usernamesql, $passwordsql);

	$dbname = "php2users";

	mysqli_select_db($con,$dbname);
	mysqli_set_charset($con, "utf8");

	$email = $_POST['email'];

	$pre = "SELECT * from users WHERE email = ";
	$query = "{$pre}'{$email}'";
				
	$get = mysqli_query($con, $query);

				
	$result = mysqli_fetch_assoc($get); 

	if (strlen($email) > 30)
	{
		echo "The length of username can only be less than 30 characters";
	}
	elseif (strpos($email,'@') == false) 
	{
		echo "The E-mail address is invalid";
	}
	elseif ($result != false) 
	{
		echo "The E-mail has already been registered";
	}
?>