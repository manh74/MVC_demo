<?php
require '../controller/database.php';
require_once '../model/user.php';
function login($username, $password){
	global $db;
	$sql = "SELECT * FROM users where username = '$username' AND password = '$password'";

	$result = $db->query($sql)->fetch_all();
	if (count($result) > 0) {
		$user = new User();
		$user->fullname = $result[0][1];
		return $user;
	}
	return null;
}
 ?>
