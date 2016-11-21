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

	$username = $_POST['username'];

	$pre = "SELECT * from users WHERE username = ";
	$query = "{$pre}'{$username}'";
				
	$get = mysqli_query($con, $query);

				
	$result = mysqli_fetch_assoc($get); 

	if (strlen($username) < 6 || strlen($username) > 20)
	{
		echo "The length of username can only be 6 to 20 characters";
	}

	elseif ($result != false) 
	{
		echo "The account has already exist";
	}
?>