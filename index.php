<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>KaliHome Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form name="login" action="#" method="POST" class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-lock"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						KaliHome Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>


					<div class="container-login100-form-btn">
						<input type="submit" value="Login" class="login100-form-btn" style="background-color: white; margin-right: 20px"/>
						<input type="reset" value="Reset" class="login100-form-btn" style="background-color: white"/>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<?php
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
	if($_POST["username"] && $_POST["password"]) {
		if(array_key_exists($_POST["username"], $users) && $users[$_POST["username"]] == hash("sha256", $salt . $_POST["password"])) {
			$_SESSION["username"] = $_POST["username"];
			$_SESSION["password"] = $users[$_POST["username"]];
			echo "<script>window.location.href = 'dash.php';</script>";
			exit();
		}
		else {
			echo "<script>alert('FAIL')</script>";
		}
	}
	elseif($_SESSION["username"] && $_SESSION["password"] && array_key_exists($_SESSION["username"], $users) && $users[$_SESSION["username"]] == $_SESSION["password"]) {
		echo "<script>window.location.href = 'dash.php';</script>";
		exit();
	}
?>
</body>
</html>
