<?php require "login.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>KaliHome Settings</title>
</head>
<body>
	<form action="#" method="POST">
		Add User: <input type="text" name="user"/><br>
		Format: username:password
	</form>
	<br>
	<?php
		if($_POST["user"]) {
			$username = explode(":", $_POST["user"])[0];
			$password = explode(":", $_POST["user"])[1];
			$salt = "Ashish is the best";
			$hash = hash("sha256", $salt . $password);
			$line = $username . ":" . $hash;
			file_put_contents("users.txt", $line.PHP_EOL, FILE_APPEND | LOCK_EX);
		}
		$file = fopen("users.txt", "r+");
		$contents = fread($file, filesize("users.txt"));
		$associative_array = array();
		$array = array_slice(explode("\n", $contents), 0, -1);
		foreach($array as $line) {
			$tmp = explode(":", $line);
			$associative_array[$tmp[0]] = $tmp[1];
		}
		fclose($file);
		echo "<strong>Users:</strong> ";
		foreach($associative_array as $key => $value) {
			echo $key . " ";
		}
	?>
</body>
</html>
