<?php 
	error_reporting(E_ALL || ~E_NOTICE);
	error_reporting(E_ALL || ~E_WARNING);

	$passwordc = $_POST['passwordc'];

	$password = $_POST['password'];

	
	if ($password != $passwordc)
	{
		echo "The passwords you have inputted are incongruous";
	}


?>