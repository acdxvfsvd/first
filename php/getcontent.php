<?php
	$servernamesql = "127.0.0.1"; 
	$usernamesql = "root"; 
	$passwordsql = ""; 
	$con = mysqli_connect($servernamesql, $usernamesql, $passwordsql);
	$dbname="php2users";
	mysqli_select_db($con,$dbname);

	$query = "SELECT * FROM content";

	$result = mysqli_query($con,$query);
	
	$row=mysqli_num_rows($result);

	function mysql_fetch_all($a)
	 {
		$rows = array();

		while($row=mysqli_fetch_array($a))

		$rows[] = $row;

		return $rows;

	}
	$result_all=mysql_fetch_all($result);

	for ($i=0; $i <= $row - 1; $i ++)
	{
		printf("<table width=\"70%%\">");
		printf("<tr>");
		printf("<td id=\"uname\"> · %s</td><td id=\"time\">%s</td>",$result_all[$i]['username'],$result_all[$i]['time']);
		printf("</tr>");
		printf("<td colspan=\"2\" id=\"comment\">%s</td>",$result_all[$i]['content']);
		printf("</tr>");
		printf("</table>");
		printf("<br>");
	}
?>