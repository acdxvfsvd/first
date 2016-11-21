<?php 
	error_reporting(E_ALL || ~E_NOTICE);
	error_reporting(E_ALL || ~E_WARNING);

	

	$password = $_POST['password'];

	
	if (strlen($password) < 6 || strlen($password) > 20)
	{
		echo "The length of password can only be 6 to 20 characters";
	}


?>