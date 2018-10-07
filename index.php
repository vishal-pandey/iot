<?php
	$server = "localhost";
	$user = "root";
	$password = "12345";
	$db = "iot";

	$mysql = new mysqli($server, $user, $password, $db);
	// var_dump($mysql);


	$sql = "select * from devices where id = 1";
	$result = $mysql->query($sql);
	$row = $result->fetch_assoc();
	var_dump($row);
?>
