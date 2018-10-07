<?php
	$server = "localhost";
	$user = "root";
	$password = "12345";
	$db = "iot";

	$mysql = new mysqli($server, $user, $password, $db);

	$sql = "update devices set state = 0 where id = 1";
	if ($mysql->query($sql)) {
		echo "{'status': 'success',
				'state': '0',
				'msg': 'Device is now Off'}";
	}

?>
