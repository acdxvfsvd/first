<?php
	session_start();

	$servernamesql = "127.0.0.1"; 
	$usernamesql = "root"; 
	$passwordsql = ""; 
	$con = mysqli_connect($servernamesql, $usernamesql, $passwordsql);
	$dbname="php2users";
	mysqli_select_db($con,$dbname);

	$username=$_POST['username'];
	$password=$_POST['password'];
	$passwordc=$_POST['passwordc'];
	$email=$_POST['email'];

	$usrn1="'".$username."'";
	$psw1="'".$password."'";
	$eml1="'".$email."'";

			
	$add="INSERT INTO users (username,password,email) VALUES ($usrn1,$psw1,$eml1)";
	//echo $add;
	if (mysqli_query($con,$add))
	{
		$_SESSION['isregister'] =  1;
	}
	else
	{
		
	}

	mysqli_close($con);

	header("Location: ../result.php");
			
?>










