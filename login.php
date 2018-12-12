<?php
	session_start();
	$file = fopen("users.txt", "r+");
	$contents = fread($file, filesize("users.txt"));
	$users = array();
	$array = array_slice(explode("\n", $contents), 0, -1);
	foreach($array as $line) {
		$tmp = explode(":", $line);
		$users[$tmp[0]] = $tmp[1];
	}
	fclose($file);
	$salt = "Ashish is the best";
	if(!$_SESSION["username"] || !$_SESSION["password"] || !array_key_exists($_SESSION["username"], $users) || $users[$_SESSION["username"]] != $_SESSION["password"]) {
		echo "<script>window.location.href = 'index.php';</script>";
		exit();
	}
?>
