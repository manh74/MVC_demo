<?php 
require "controller/database.php";

if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$sql = "SELECT * FROM users where username = '$username' AND password = '$password'";

	$result = $db->query($sql)->fetch_all();
	if (count($result) > 0) {
		echo "Login thanh cong";
	}
	else {
		echo "Login that bai!";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="view/home.php">
		<input type="text" name="username">
		<input type="text" name="password">
		<button type="submit" name="login">Login</button>
	</form>


</body>
</html>