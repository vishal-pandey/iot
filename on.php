<?php
	$server = "localhost";
	$user = "root";
	$password = "12345";
	$db = "iot";

	$mysql = new mysqli($server, $user, $password, $db);

	$sql = "update devices set state = 1 where id = 1";
	if ($mysql->query($sql)) {
		echo "{'status': 'success',
				'state': '1',
				'msg': 'Device is now On'}";
	}

?>
