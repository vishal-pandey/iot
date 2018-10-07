<?php
	$server = "localhost";
	$user = "root";
	$password = "12345";
	$db = "iot";

	$mysql = new mysql_connect($server, $user, $password, $db);
	var_dump($mysql);
?>
